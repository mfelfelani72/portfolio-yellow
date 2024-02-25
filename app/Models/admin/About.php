<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'language',
        'specialtie',
        'cv',
        'exprience',
        'proj_completed',
        'hap_client',
        'award_won',
    ];
}
