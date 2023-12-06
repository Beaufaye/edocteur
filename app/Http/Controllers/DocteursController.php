<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\docteurs;

class DocteursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function docteurs()
    {
        $docteurs = docteurs::all();
        return view('docteurs', compact('docteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajdocteurs()
    {
        return view('ajdocteurs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function docteurst(Request $request)
    {
        $docteurs = new Docteurs();
        $docteurs->nom = $request->nom;
        $docteurs->prenom = $request->prenom;
        $docteurs->fonction = $request->fonction;
        $docteurs->sexe = $request->sexe;
        $docteurs->save();

        return redirect('ajdocteurs')->with('status', 'Le docteur a bien été ajouté.');
    }

    
    public function update_docteurs($id)
    {
        $docteurs = docteurs::find($id);
       return view('mod_docteurs', compact('docteurs'));
    }

    public function uprendezvous(Request $request){
        
        $docteurs = docteurs::find($request->id);
        $docteurs->nom = $request->nom;
        $docteurs->prenom = $request->prenom;
        $docteurs->fonction = $request->fonction;
        $docteurs->sexe = $request->sexe;
        $docteurs->update();

        return redirect('docteurs')->with('status', 'Le docteur a bien été modifié.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docteurs = docteurs::find($id);
        $docteurs->delete();
        return redirect('docteurs')->with('status', 'Le docteur a bien été supprimé.');
    }
}
