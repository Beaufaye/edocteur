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
        return view('docteurs.docteurs', compact('docteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajdocteurs()
    {
        return view('docteurs.ajdocteurs');
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
