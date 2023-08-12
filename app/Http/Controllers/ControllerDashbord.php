<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Processus;


class ControllerDashbord extends Controller
{
    public function List_Processus()
    {
         $Processuses=Processus::all();
        return view('Processus.Processus')->with('Processus', $Processuses);
    }
    


    /*public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomprocessus' => 'required|string|max:255',
            'startdate' => 'required|date',
            'enddate' => 'required|date',
            'description' => 'required|string',
            'status' => 'required|in:0,1,2',
        ]);
        $processus = new Processus();
$processus->nom_Processus = $validatedData['nomprocessus'];
$processus->date_debut = $validatedData['startdate'];
$processus->date_fin = $validatedData['enddate'];
$processus->description = $validatedData['description'];
$processus->status = $validatedData['status'];
$processus->save();
         
       
    }*/






    public function list_Etapes()
    {
        
        return view('Processus.Etapes');
    }

    public function list_Risque()
    {

        return view('Processus.Risque');
    }
    public function login()
    {
        return view('login.admin');
    }
    public function RessourceListe()
    {
        return view('Processus.Ressource');
    }
}
