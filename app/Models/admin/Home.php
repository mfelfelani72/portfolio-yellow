<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'nick_name',
        'job',
        'deg_education',
        'description',
        'image',
        'status',
    ];
}
