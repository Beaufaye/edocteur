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
        return view('patients.patients', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajpatients()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function patientst(Request $request)
    {
        //
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