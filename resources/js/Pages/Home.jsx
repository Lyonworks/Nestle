import { useEffect, useState } from 'react';
import axios from 'axios';

export default function Home() {
  const [category, setcategory] = useState([]);

  useEffect(() => {
    axios.get('/api/category')
      .then((res) => setcategory(res.data))
      .catch((err) => console.error("Failed to fetch category:", err));
  }, []);

  return (
    <div className="grid grid-cols-1 md:grid-cols-3 gap-6 p-8">
      {category.map((cat) => (
        <div key={cat.id} className="rounded shadow hover:-translate-y-1 transition bg-white">
          <img
            src={`/storage/${cat.image}`}
            alt={cat.name}
            className="w-full h-48 object-cover rounded-t"
          />
          <div className="p-4">
            <h2 className="text-lg font-bold">{cat.name}</h2>
          </div>
        </div>
      ))}
    </div>
  );
}