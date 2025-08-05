import React, { useEffect, useState } from 'react';
import axios from 'axios';

const CategoryList = () => {
  const [category, setcategory] = useState([]);

  useEffect(() => {
    axios.get('/api/category')
      .then(res => setcategory(res.data))
      .catch(err => console.error('Error fetching category:', err));
  }, []);

  return (
    <div className="container py-5">
      <div className="row g-4">
        {category.map(category => (
          <div className="col-md-4" key={category.id}>
            <div className="card" style={{
              borderRadius: '20px',
              overflow: 'hidden',
              boxShadow: '0 4px 10px rgba(0,0,0,0.1)',
              transition: '0.3s',
            }}>
              <img
                src={`/storage/${category.image}`}
                alt={category.name}
                className="category-image"
                style={{
                  width: '100%',
                  height: '200px',
                  objectFit: 'cover'
                }}
              />
              <div className="p-3">
                <h5 className="mb-0">
                  <a href={`/category/${category.slug}`} className="text-decoration-none">
                    {category.name} →
                  </a>
                </h5>
              </div>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};

export default CategoryList;
