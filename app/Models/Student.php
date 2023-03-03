<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'st_name',
        'st_gender',
        'st_hobby',
        'st_mobile',
        'st_email',
        'st_password',
        'st_bloodgroup',
        'st_address',
        'st_image'
    ];
}
