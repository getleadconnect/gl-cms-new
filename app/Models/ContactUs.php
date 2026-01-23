<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = 'contact_us';
    protected $primaryKey = 'id';
    protected $filleble = [
        'first_name','last_name','email','country_code','mobile','company_name','country','comments','location','is_demo'
    ];
}
