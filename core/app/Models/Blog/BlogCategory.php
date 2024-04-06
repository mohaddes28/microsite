<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'slug'];

    public function allPosts()
    {
        return $this->hasMany(BlogPost::class,'category_id', 'id');
    }
}
