<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'Utilisateur';
    protected $primaryKey = 'ID_Utilisateur';
    protected $fillable = [
        'Nom', 'Prenom', 'Genre', 'Date_Naissance', 'Adresse_Email', 'Mot_de_passe','Photo','Role'];

    public function patient()
    {
        return $this->hasOne(Patient::class, 'ID_Utilisateur');
    }

    public function medecin()
    {
        return $this->hasOne(Medecin::class, 'ID_Utilisateur');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'ID_Utilisateur');
    }

    public function messagesEnvoyes()
    {
        return $this->hasMany(Message::class, 'ID_Expéditeur');
    }

    public function messagesRecus()
    {
        return $this->hasMany(Message::class, 'ID_Destinataire');
    }

    
    
}
