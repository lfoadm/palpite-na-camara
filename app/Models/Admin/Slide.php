<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\SlideFactory> */
    use HasFactory;
    protected $fillable = ['tagline', 'title', 'subtitle', 'link', 'image', 'status'];
    
}