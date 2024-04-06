<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'slug', 'feature_image', 'description', 'meta_keyword', 'meta_description'];
}
