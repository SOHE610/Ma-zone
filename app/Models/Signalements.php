<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signalements extends Model
{
    protected $fillable = [
        'titre', 'description', 'categorie_id', 'utilisateur_id',
        'quartier_id', 'latitude', 'longitude', 'photo', 'statut', 'date_signalement'
    ];

    
}
