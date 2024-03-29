<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'rating',
        'course_id',
        'compte_id',
        'formation_id',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'compte_id');
    }
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

}
