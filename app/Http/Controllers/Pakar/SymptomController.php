<?php

namespace App\Http\Controllers\Pakar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pakar\Symptom\StoreSymptomRequest;
use App\Http\Requests\Pakar\Symptom\UpdateSymptomRequest;
use App\Models\Symptom;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pakar.symptom.index', [
            'title'     => 'gejala',
            'subtitle'  => '',
            'data'      => '',
            'active'    => 'symptom'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pakar.symptom.create', [
            'title'     => 'gejala',
            'subtitle'  => 'create',
            'data'      => '',
            'active'    => 'symptom'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSymptomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Symptom $symptom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Symptom $symptom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSymptomRequest $request, Symptom $symptom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Symptom $symptom)
    {
        //
    }
}
