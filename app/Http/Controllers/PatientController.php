<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function showPatients(){
        $patients = Patient::join('utilisateur', 'ID_Utilisateur', '=', 'patients.ID_Utilisateur')
            ->select('utilisateur.Nom', 'utilisateur.Prenom')
            ->get();
    
        // Return array of patients with Nom and Prenom from Utilisateur
        return response()->json(['patients' => $patients], 200);
    }
}
