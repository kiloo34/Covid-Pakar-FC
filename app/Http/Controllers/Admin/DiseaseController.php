<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Disease\StoreDiseaseRequest;
use App\Http\Requests\Admin\Disease\UpdateDiseaseRequest;
use App\Models\Disease;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.disease.index', [
            'title'     => 'penyakit',
            'subtitle'  => '',
            'data'      => '',
            'active'    => 'disease'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.disease.create', [
            'title'     => 'penyakit',
            'subtitle'  => 'create',
            'data'      => '',
            'active'    => 'disease'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiseaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disease $disease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiseaseRequest $request, Disease $disease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disease $disease)
    {
        //
    }
}
