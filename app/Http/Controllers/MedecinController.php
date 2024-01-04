<?php

namespace App\Http\Controllers;
use App\Models\Medecin;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use PHPUnit\TextUI\Configuration\Php;

class MedecinController extends Controller
{
   /* public function store(Request $request)
{
    $request->validate([
        'ID_Utilisateur' => 'required|exists:Utilisateur,ID_Utilisateur',
        'Specialite' => 'required',
        'Sessions_Therapie_Planifiees' => 'required|integer',
        'photo_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

     $medecin = Medecin::create([
        'ID_Utilisateur' => $request->ID_Utilisateur,
        'Specialite' => $request->Specialite,
        'Sessions_Therapie_Planifiees' => $request->Sessions_Therapie_Planifiees,
    ]);

    if ($request->hasFile('photo_profile')) {
        $photoPath = $request->file('photo_profile')->store('photo_profile');
        $medecin->update(['photo_profile' => $photoPath]);
    }

    return response()->json(['medecin' => $medecin], 201);
}
public function create(){
    return view('Medecin');
}*/
/*public function updateProfile(Request $request)
{
    $request->validate([
        'photo_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Get the authenticated doctor (you might adjust this based on your authentication setup)
    $medecin = auth()->user()->medecin;

    if ($request->hasFile('photo_profile')) {
        // Handle file upload
        $photoPath = $request->file('photo_profile')->store('photo_profile');
        
        // Update the profile image path in the database
        $medecin->update(['photo_profile' => $photoPath]);
    }

    return redirect()->route('Medecin.profile')->with('success', 'Profile updated successfully.');
}
}*/
/*public function index(){
    $medecins= Medecin::all();
    return view ('Medecins.index')-> with('Medecins',$medecins);

}
public function create(){
    return view('Medecins.create');
    
}
public function store(Request $request){
    
    
    $requestData = $request->all();
    

    
        $fileName = time().$request->file('photo_profile')->getClientOriginalName();;
        $path = $request->file('photo_profile')->storeAs('images', $fileName, 'public');
        $requestData["photo_profile"] = '/storage/'.$path;
        Medecin::create($requestData);
        return redirect('Medecin')->with('flash_message', 'image added!');
}
public function show($id){
    
}*/



    public function getMedecin($id)
    {
        $medecin = Medecin::with('utilisateur')->find($id);

        if (!$medecin) {
            return response()->json(['error' => 'Medecin not found'], 404);
        }

        return response()->json($medecin);
    }


    public function show($id)
{
    $medecin = Medecin::find($id);
    if (!$medecin) {
        return response()->json(['error' => 'Medecin not found'], 404);
    }

    // Return the medecin data
    return response()->json($medecin);
}


public function getPatients()
{
    $medecin = auth()->user();
    $patients = $medecin->patients;

    return response()->json(['patients' => $patients]);
}

}