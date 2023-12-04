<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rendezvous;

class RendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function rendezvous()
    {
        $rendezvous = rendezvous::all();
        return view('rendez-vous.rendezvous', compact('rendezvous'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajrendezvous()
    {
        return view('rendez-vous.rendezvous');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function rendezvoust(Request $request)
    {
        $rendezvous = new rendezvous();
        $rendezvous->nom = $request->nom;
        $rendezvous->prenom = $request->prenom;
        $rendezvous->fonction = $request->fonction;
        $rendezvous->sexe = $request->sexe;
        $rendezvous->save();

        return redirect('ajrendezvous')->with('status', 'Le rendez-vous a bien été programmé.');
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
