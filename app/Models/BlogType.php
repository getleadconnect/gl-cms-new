<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogType extends Model
{
    use HasFactory;
    protected $table = 'blog_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','slug','created_by','status'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->name);
        });
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
