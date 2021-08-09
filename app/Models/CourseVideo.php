<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'video', 'user_id', 'description', 'chapter_id', 'review_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'review_id', 'id');
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class, 'chapter_id', 'id');
    }
}
