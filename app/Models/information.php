<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    use HasFactory;

    protected $table = 'information';

    protected $fillable = [
        'user_id',
        'type',
        'description',
        'image_path',
        'latitude',
        'longitude',
    ];

    /**
     * Relation avec l'utilisateur (citoyen).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
