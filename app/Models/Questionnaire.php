<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $table = 'Questionnaire';

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'ID_Patient');
    }

    public function reponsesQuestionnaire()
    {
        return $this->hasMany(ReponseQuestionnaire::class, 'ID_Questionnaire');
    }
}
