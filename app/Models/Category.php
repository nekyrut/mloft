<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
       'title',
       'slug',
       'description',
       'images',
       'parent_id',
       'is_published'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(self::class)->with('categories');
    }
}
