<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'Message';

    public function expediteur()
    {
        return $this->belongsTo(Utilisateur::class, 'ID_Expéditeur');
    }

    public function destinataire()
    {
        return $this->belongsTo(Utilisateur::class, 'ID_Destinataire');
    }
}
