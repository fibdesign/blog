<?php

namespace Fibdesign\Blog\Models;

use Carbon\Carbon;
use Fibdesign\Blog\Casts\strip;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['registered'];
    protected $casts = [
        'content' => strip::class,
        'approved' => 'boolean',
        'deleted' => 'boolean',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    //    get Attributes
    public function getRegisteredAttribute()
    {
        return Carbon::createFromTimeString($this->attributes['updated_at'])->diffForHumans();
    }
    //    Relations
    public function article(): BelongsTo { return $this->belongsTo(Article::class); }
}
