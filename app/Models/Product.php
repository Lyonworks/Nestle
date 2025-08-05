<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['brand_id', 'name', 'description', 'image'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
