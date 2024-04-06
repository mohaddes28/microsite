<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_name',
        'title',
        'description',
        'button_text',
        'image',
        'more_content',
        'more_button',
        'video_link',
    ];
}
