<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'extra',
    ];
}
