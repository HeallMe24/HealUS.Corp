<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'contentarticle',
        'thumbnail',
        'photo',
        'author',
        'user_id',
        'likes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset('storage/uploads/articles/thumbnail/' . $this->thumbnail) : null;
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo ? asset('storage/uploads/articles/photo/' . $this->photo) : null;
    }
}
