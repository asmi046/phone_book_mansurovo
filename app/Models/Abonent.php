<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonent extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'podrazdelenie',
        'otdel',
        'dolgnost',
        'phone_st',
        'phone_mobile'
    ];

}
