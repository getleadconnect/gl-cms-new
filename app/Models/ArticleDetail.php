<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArticleDetail extends Model
{
    use HasFactory;
    protected $table = 'article_details';
    protected $primary_key = 'id';
    protected $fillable = [
        'article_id','title','description','note','image','status','slug'
    ];
    protected $hidden = ['created_at','updated_at'];

    public function article()
    {
        return $this->belongsTo(article::class,'article_id','id');
    }

}
