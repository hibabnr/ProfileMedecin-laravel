<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
   protected $table = 'Medecin';
   protected $fillable = [
    'Nom', 'Prenom', 'Genre', 'Date_Naissance', 'Adresse_Email', 'Mot_de_passe','photo','Specialite', 'Sessions_Therapie_Planifiees'];
    

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'ID_Utilisateur');
    }

    public function questionnaires()
    {
        // Définissez la relation selon votre schéma
    }
    // In Medecin model
       public function patients(){
          return $this->hasMany(Patient::class, 'ID_Medecin');
         }

    
    
   


}
