<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogDetail extends Model
{
    use HasFactory;
    protected $table = 'blog_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title','images','note','description','status','created_by'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($detail) {
            $detail->slug = Str::slug($detail->title);
        });
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
