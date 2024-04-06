<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalSeo extends Model
{
    use HasFactory;
    protected $fillable = ['site_name','title','description','keywords','og_title','og_description','og_site_name','og_updated_time','og_image','article_published_time','article_modified_time','twitter_card','twitter_title','twitter_description','twitter_image','favicon'];
}
