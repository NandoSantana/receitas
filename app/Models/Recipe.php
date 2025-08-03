<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    /** @use HasFactory<\Database\Factories\RecipeFactory> */
    use HasFactory;


    protected $fillable = ['title', 'description', 'image_path', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
