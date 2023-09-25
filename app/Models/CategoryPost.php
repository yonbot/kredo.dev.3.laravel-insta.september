<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;

    protected $table = 'category_post'; //category_posts - what the laravel assumes
    protected $fillable = ['category_id', 'post_id']; //allow mass assigments
    public $timestamps = false;

    #get the name of the category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
