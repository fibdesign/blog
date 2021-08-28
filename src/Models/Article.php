<?php

namespace Fibdesign\Blog\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    // Category is Scoped by "protected $with"

    use HasFactory;
    public static $snakeAttributes = false;
    protected $guarded = [];
    protected $hidden = ['category_id','description','tags','updated_at','created_at'];
    protected $casts = ['popular' => 'boolean'];
    protected $appends = ['registered'];
    protected $with = ['category'];


    protected static function booted()
    {
        self::addGlobalScope('latest', function ($query){
            $query->latest('updated_at');
        });
    }

    // scopes
    public function scopePopular($query)
    {
        return $query->where('popular', true);
    }
    //    get Attributes

    public function getRegisteredAttribute()
    {
        return Carbon::createFromTimeString($this->attributes['updated_at'])->diffForHumans();
    }
    public function getIsPopularFullAttribute()
    {
        return (Article::query()->popular()->count() >= 5);
    }
    //    Relations
    public function category(): BelongsTo { return $this->belongsTo(Category::class); }
    public function comments(): HasMany { return $this->hasMany(Comment::class); }
    public function approvedComments(): HasMany {
        return $this->hasMany(Comment::class)
            ->where('approved', true)
            ->latest('updated_at');
    }

}
