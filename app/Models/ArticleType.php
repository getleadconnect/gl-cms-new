<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArticleType extends Model
{
    use HasFactory;
    protected $table = 'article_types';
    protected $primary_key = 'id';
    protected $fillable = [
        'name','created_by'
    ];
    protected $hidden = ['created_at','updated_at'];

    protected static function boot() {
        parent::boot();

        static::creating(function ($type) {
            $type->slug = Str::slug($type->name);
        });
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
