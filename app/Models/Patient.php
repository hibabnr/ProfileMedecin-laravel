<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'Patient';
    protected $fillable = [
        'Specialite', 'Sessions_Therapie_Planifiees'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'ID_Utilisateur');
    }

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class, 'ID_Patient');
    }

    public function alertes()
    {
        return $this->hasMany(Alerte::class, 'ID_Patient');
    }
    // In Patient model
public function primaryDoctor()
{
    return $this->belongsTo(Medecin::class, 'ID_Primary_Doctor');
}

}
