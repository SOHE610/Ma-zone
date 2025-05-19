<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Signalements extends Model
{

     use HasFactory;
     
    protected $fillable = [
        'titre',
        'description',
        'categorie',
        'quartier',
        'utilisateur_id',
        'latitude',
        'longitude',
        'photo',
    ];

    
}
