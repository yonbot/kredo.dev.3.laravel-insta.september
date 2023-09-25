<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    #Post-User
    #a post belongs to a user
    #to get the owner of the post
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    #get the categories under a post
    public function categoryPost()
    {
        return $this->hasMany(CategoryPost::class);
    }

    #to get all the comments of a post
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    # to get the likes of a post
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    # Returns TRUE if the Auth user already like the post
    public function isLiked()
    {
        return $this->likes()->where('user_id', Auth::user()->id)->exists();
    }
}
