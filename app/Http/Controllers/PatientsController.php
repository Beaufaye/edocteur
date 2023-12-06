<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patients;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function patients()
    {
        $patients = patients::all();
        return view('patients', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajpatients()
    {
        return view('ajpatients');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function patientst(Request $request)
    {
        $patients = new patients();
        $patients->nom_prenom = $request->nom_prenom;
        $patients->adresse = $request->adresse;
        $patients->telephone = $request->telephone;
        $patients->sexe = $request->sexe;
        $patients->save();

        return redirect('patients')->with('status', 'Patient a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function update_patients($id)
    {
        $patients = patients::find($id);
       return view('mod_patients', compact('patients'));
    }

    public function uppatientst(Request $request){
        
        $patients = patients::find($request->id);
        $patients->nom_prenom = $request->nom_prenom;
        $patients->adresse = $request->adresse;
        $patients->telephone = $request->telephone;
        $patients->sexe = $request->sexe;
        $patients->update();

        return redirect('patients')->with('status', 'Patient a bien été modifié.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patients = patients::find($id);
        $patients->delete();
        return redirect('patients')->with('status', 'Patient a bien été supprimé.');
    }
}
