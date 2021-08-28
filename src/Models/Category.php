<?php

namespace Fibdesign\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected static function booted()
    {
        self::addGlobalScope('latest', function ($query){
            $query->latest('id');
        });
    }
    public function articles(): HasMany { return $this->hasMany(Article::class); }
}
