<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'stock',
        'min_stock',
        'discount',
        'category_id',
        'gallery',
        'price'
        ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
