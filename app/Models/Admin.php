<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   
    protected $table = 'Admin';

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'ID_Utilisateur');
    }
}
