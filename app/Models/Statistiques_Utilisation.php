<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistiques_Utilisation extends Model
{
    protected $table = 'Statistiques_Utilisation';

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'ID_Utilisateur');
    }
}
