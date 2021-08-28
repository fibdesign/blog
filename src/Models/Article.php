<?php

namespace Fibdesign\Blog\Models;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static function newFactory()
    {
        return ArticleFactory::new();
    }
}
