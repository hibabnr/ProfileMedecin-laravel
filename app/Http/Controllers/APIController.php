<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class APIController extends Controller
{
     public function getUsers(){
        $getUsers=Utilisateur::get();
        return $getUsers;
       //return response()->json(["users"=>$getUsers],200);
     }
     public function show(){
          $show=Medecin::get();
          return $show;
     }
}
