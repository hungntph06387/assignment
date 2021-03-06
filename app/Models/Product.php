<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'name',
        'price',
        'description',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
