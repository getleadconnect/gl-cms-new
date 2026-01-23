<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable= [
        'image','name','created_by','deleted_by','status','slug'
    ];
    protected $hidden = ['created_at','updated_at'];

    protected static function boot() {
        parent::boot();

        static::creating(function ($client) {
            $client->slug = Str::slug($client->name.$client->id);
        });
    }
}
