<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    protected $table = 'Alerte';

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'ID_Patient');
    }
}
