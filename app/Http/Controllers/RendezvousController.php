<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rendezvous;
use App\Models\patients;

class RendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function rendezvous()
    {
        $rendezvous = rendezvous::all();
        return view('rendezvous', compact('rendezvous'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajrendezvous()
    {
        $patients = patients::all();
        return view('ajrendezvous', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function rendezvoust(Request $request)
    {
        $rendezvous = new rendezvous();
        $rendezvous->nom = $request->nom;
        $rendezvous->prenom = $request->prenom;
        $rendezvous->telephone = $request->telephone;
        $rendezvous->service = $request->service;
        $rendezvous->date = $request->date;
        $rendezvous->heure = $request->heure;
        $rendezvous->message = $request->message;
        $rendezvous->save();

        return redirect('ajrendezvous')->with('status', 'Le rendez-vous a bien été programmé.');
    }

    public function update_rendezvous($id)
    {
        $rendezvous = rendezvous::find($id);
       return view('mod_rendezvous', compact('rendezvous'));
    }

    public function uprendezvous(Request $request){
        
        $rendezvous = rendezvous::find($request->id);
        $rendezvous->nom = $request->nom;
        $rendezvous->prenom = $request->prenom;
        $rendezvous->telephone = $request->telephone;
        $rendezvous->service = $request->service;
        $rendezvous->date = $request->date;
        $rendezvous->heure = $request->heure;
        $rendezvous->message = $request->message;
        $rendezvous->update();

        return redirect('rendezvous')->with('status', 'Le rendez-vous a bien été modifié.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rendezvous = rendezvous::find($id);
        $rendezvous->delete();
        return redirect('rendezvous')->with('status', 'Le rendez-vous a bien été supprimé.');
    }
}
