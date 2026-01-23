<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'blog_name','blog_title','blog_description','slug','created_by','status','featured'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->blog_name);
        });
    }

    public function blogType()
    {
        return $this->hasOne(BlogType::class,'id','blog_type');
    }

    public function blogDetails()
    {
        return $this->hasMany(BlogDetail::class,'blog_id','id');
    }
}
