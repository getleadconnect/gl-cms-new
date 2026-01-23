<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image','description','name','designation','created_by','deleted_by','status','slug'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($testimonial) {
            $testimonial->slug = Str::slug($testimonial->name.$testimonial->id);
        });
    }

    protected $hidden = [ 'created_at' , 'updated_at'];
}
