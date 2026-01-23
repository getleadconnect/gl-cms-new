<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    protected $primary_key = 'id';
    protected $fillable = [
        'question','answer','created_by','deleted_by','status','slug'
    ];
    protected $hidden = ['created_at','updated_at'];

    protected static function boot() {
        parent::boot();

        static::creating(function ($faq) {
            $faq->slug = Str::slug($faq->question.$faq->id);
        });
    }
}
