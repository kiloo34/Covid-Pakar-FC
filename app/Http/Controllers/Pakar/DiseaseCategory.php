<?php

namespace App\Http\Controllers\Pakar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pakar\DiseaseCategory\StoreDiseaseCategoryRequest;
use App\Http\Requests\Pakar\DiseaseCategory\UpdateDiseaseCategoryRequest;

class DiseaseCategory extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pakar.disease.category.index', [
            'title'     => 'kategori_penyakit',
            'subtitle'  => '',
            'data'      => '',
            'active'    => 'diseaseCategory'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pakar.disease.category.create', [
            'title'     => 'kategori_penyakit',
            'subtitle'  => 'create',
            'data'      => '',
            'active'    => 'diseaseCategory'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiseaseCategoryRequest $request)
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
    public function update(UpdateDiseaseCategoryRequest $request, string $id)
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
