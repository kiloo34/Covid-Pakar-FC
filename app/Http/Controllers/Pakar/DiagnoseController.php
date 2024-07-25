<?php

namespace App\Http\Controllers\Pakar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pakar\Diagnose\StoreDiagnoseRequest;
use App\Http\Requests\Pakar\Diagnose\UpdateDiagnoseRequest;
use App\Models\Diagnose;
use App\Models\Rule;
use App\Models\SymptomCategory;

class DiagnoseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $symptoms = Symptom::all();
        $symptoms = SymptomCategory::all();

        return view('pakar.diagnose.index', [
            'title'     => 'diagnosa',
            'subtitle'  => '',
            'data'      => '',
            'gejalas'   => $symptoms,
            'active'    => 'diagnose'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiagnoseRequest $request)
    {
        $actualRuleDatas = [];
        $actualRuleDatas = [];
        $rules = Rule::all();

        $actualDirtyRuleDatas = $request->categorySymptoms;
        $actualRuleDatas = [];
        $suspect = [];
        $iteration = 0;

        $compare = [];
        // dd($request->categorySymptoms);
        $res = [
            'process' => [],
            'ruleActual' => $actualRuleDatas
        ];

        foreach ($actualDirtyRuleDatas as $index => $a) {
            $actualRuleDatas[] = $a;
        }

        // looping for rules from database
        foreach ($rules as $i => $rule) {
            $ruleDatas = json_decode($rule->rules);
            // loop for comparison of actual rule data that exists in each rule in the database
            $ruleEquals = [];
            foreach ($ruleDatas as $j => $ruleData) {
                // start process looping comparison from actual data
                $equals = 0;
                if (is_array($ruleData)) {
                    foreach ($ruleData as $k => $data) {
                        $equals = collect($actualRuleDatas)->contains($data) ? 1 : 0;
                        if ($equals == 1) {
                            break;
                        }
                    }
                } else {
                    $equals = collect($actualRuleDatas)->contains($ruleData) ? 1 : 0;
                }
                if ($equals == 1) {
                    $ruleEquals[$j] = $ruleData;
                }
            }
            $res['process'][$i] = [
                'ruleId' => $rule->id,
                'category' => $rule->disease_category->name,
                'ruleCount' => count($ruleDatas),
                'ruleEquals' => $ruleEquals,
                'ruleEqualsCount' => count($ruleEquals),
                'ruleEqualsPercent' => round((count($ruleEquals) / count($ruleDatas)) * 100, 2)
            ];
        }
        return response()->json($res);
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnose $diagnose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnose $diagnose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiagnoseRequest $request, Diagnose $diagnose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnose $diagnose)
    {
        //
    }
}
