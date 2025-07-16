<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerRegister extends Model
{
    use HasFactory;
    protected $fillable = [
    'company_name',
    'fullName',
    'email',
    'phone',
    'businessType',
    'website',
    'message',
    'agree',
];


    
}
