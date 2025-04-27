<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'author_id',
        'new_category_id',
        'title',
        'slug',
        'thumbnail',
        'content',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function newCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }
}
