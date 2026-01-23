<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    protected $table = "articles";
    protected $primary_key = 'id';
    protected $fillable = [
        'article_name','article_title','slug','article_description','article_image','order','status','created_by','type_id'
    ];
    protected $hidden = ['created_at','updated_at'];

    protected static function boot() 
	{
        parent::boot();

        static::creating(function ($article) {
            $article->slug = Str::slug($article->article_title.$article->id);
        });
    }

    public function articleDetails()
    {
        return $this->hasMany(ArticleDetail::class,'article_id','id');
    }
    public function articleImages()
    {
        return $this->hasMany(ArticleImage::class,'article_id','id');
    }
    public function articleType()
    {
        return $this->hasOne(ArticleType::class,'slug','type_id');
    }
}
