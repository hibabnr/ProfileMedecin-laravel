<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Patient;
use App\Models\Medecin;

class UtilisateurController extends Controller {
    public function showPatient($id){
    $utilisateur = Utilisateur::with('patient')->find($id);

    if (!$utilisateur) {
        return response()->json(['message' => 'Utilisateur not found'], 404);
    }

    // Return utilisateur object with nested patient information
    return response()->json(['utilisateur' => $utilisateur,], 200);
}
public function showMedecin($id){
    $utilisateur = Utilisateur::with('medecin')->find($id);

    if (!$utilisateur) {
        return response()->json(['message' => 'Utilisateur not found'], 404);
    }

    // Return utilisateur object with nested patient information
    return response()->json(['utilisateur' => $utilisateur,], 200);
}
public function updatePatient(Request $request, $id)
{
    // Find the utilisateur by ID
    $utilisateur = Utilisateur::findOrFail($id);

    // Update utilisateur attributes
    $utilisateur->update($request->all());

    return response()->json(['message' => 'Utilisateur updated successfully']);
}
public function updateMedecin(Request $request, $id)
{
    // Find the utilisateur by ID
    $utilisateur = Utilisateur::findOrFail($id);

    // Update utilisateur attributes
    $utilisateur->update($request->all());

    return response()->json(['message' => 'Utilisateur updated successfully']);
}
//*********************************************** */
public function showPatients(){
    $utilisateurs = Utilisateur::where('Role', 'Patient')        
     ->with('patient')->get();

    // Return array of utilisateur objects with nested patient information
    return response()->json(['utilisateurs' => $utilisateurs], 200);
}




}
