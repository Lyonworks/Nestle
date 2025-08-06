<?php

namespace App\Models;

use Illuminate\Support\Str; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    
    protected $fillable = ['category_id', 'name', 'image', 'slug'];

    protected static function booted()
    {
        static::creating(function ($brand) {
            $brand->slug = Str::slug($brand->name);
        });

        static::updating(function ($brand) {
            $brand->slug = Str::slug($brand->name);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}