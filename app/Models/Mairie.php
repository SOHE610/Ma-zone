<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Mairie extends Authenticatable
{
    use HasFactory;
    use HasApiTokens,Notifiable;

    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'logo',
        'commune',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAuthIdentifierName()
    {
        return 'email_contact';
    }
}
