<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'description', 'category_id', 'image', 'review_id'
    ];

    protected $hidden = [
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'course_id', 'id');
    }
}
