<?php

namespace App\Http\Controllers\Pakar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pakar\Symptom\StoreSymptomRequest;
use App\Http\Requests\Pakar\Symptom\UpdateSymptomRequest;
use App\Models\Disease;
use App\Models\DiseaseCategory;
use App\Models\Symptom;
use App\Models\SymptomCategory;
use App\Models\SymptomDiseaseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

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
        $diseases = Disease::all();
        $symptoms = Symptom::all();
        $category = DiseaseCategory::all();
        $symptomCategories = SymptomCategory::all();
        return view('pakar.symptom.create', [
            'title'             => 'gejala',
            'subtitle'          => 'create',
            'diseases'          => $diseases,
            'symptoms'          => $symptoms,
            'diseaseCategories' => $category,
            'symptomCategories' => $symptomCategories,
            'active'            => 'symptom'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSymptomRequest $request)
    {   
        if ($request->category === 'new' && $request->symptomName === 'new') {
            $this->newSymptom($request);
        } elseif ($request->category === 'new' && $request->symptomName !== 'new') {
            $this->newSymptomCategory($request->symptomName, $request);
        } else {
            DB::transaction(function () use ($request): void {
                $map = new SymptomDiseaseCategory;
                $map->symptom_category_id = $request->category;
                $map->disease_category_id = $request->diseaseCategory;
                $map->save(); 
            });
        }
        return redirect()->route('pakar.gejala.index')->with('success_msg', 'Data Gejala / Rule ' . $request->symptom_name .' berhasil ditambah');
    }

    protected function newSymptom($request) : void 
    {
        DB::transaction(function () use ($request): void {
            $symptom = new Symptom;
            $symptom->name = $request->symptomNameNew;
            $symptom->save();
            
            $category = DiseaseCategory::find($request->diseaseCategory);

            $max = SymptomCategory::select('íd')->max('id');
            $symptomCategory = new SymptomCategory;
            $symptomCategory->name = $request->symptomCategoryName;
            $symptomCategory->code = $this->generateCode($max);
            $symptomCategory->symptom_id = $symptom->id;
            $symptomCategory->save();

            $map = new SymptomDiseaseCategory;
            $map->symptom_category_id = $symptomCategory->id;
            $map->disease_category_id = $category->id;
            $map->save();
        }); 
    }

    protected function newSymptomCategory($symptomId, $request) : void 
    {
        DB::transaction(function () use ($request, $symptomId): void {
            $category = DiseaseCategory::find($request->diseaseCategory);

            $max = SymptomCategory::select('íd')->max('id');
            $symptomCategory = new SymptomCategory;
            $symptomCategory->name = $request->symptomCategoryName;
            $symptomCategory->code = $this->generateCode($max);
            $symptomCategory->symptom_id = $symptomId;
            $symptomCategory->save();

            $map = new SymptomDiseaseCategory;
            $map->symptom_category_id = $symptomCategory->id;
            $map->disease_category_id = $category->id;
            $map->save();
        }); 
    }

    protected function generateCode($maxId) : string 
    {
        return 'R' . ($maxId + 1);
    }

    /**
     * Display the specified resource.
     */
    public function show(DiseaseCategory $gejala)
    {
        return view('pakar.symptom.show', [
            'title'             => 'gejala',
            'subtitle'          => 'create',
            'symptom'           => $gejala,
            'active'            => 'symptom'
        ]); 
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

    public function getAllDataCategory(Request $request)
    {
        if($request->ajax()) {
            $categories = DiseaseCategory::all();
            $dataTable = DataTables::of($categories)
                ->addIndexColumn()
                ->addColumn('diseaseName', function($row){
                    $disease = Disease::find($row->disease_id);
                    $symptomName = '';
                    $symptomName = ucfirst($disease->name);
                    return $symptomName;
                })
                ->addColumn('diseaseCategory', function($row){
                    $name = '';
                    $name = $row->name;
                    return $name;
                })
                ->addColumn('name', function($row){
                    $symptomName = '';

                    if (count($row->symptom_disease_categories) != 0) {
                        $symptomName = '<ul>';
                        foreach ($row->symptom_disease_categories as $data) {
                            $symptomName .= '<li>';
                            $symptomName .= $data->symptom_category->symptom->name ?? ' ';
                            $symptomName .= ' ' . $data->symptom_category->name;
                            $symptomName .= '</li>';
                        }
                        $symptomName .= '</li>';
                    } else {
                        $symptomName = 'data gejala tidak ditemukan';

                    }
                    return $symptomName;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route("pakar.gejala.show", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                    Detail
                                </a>
                                <a href="'.route("pakar.gejala.edit", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                ';
                            //     <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteDiseaseCategory('.$row->id.')">
                            //     <i class="fas fa-edit"></i>
                            //     Hapus
                            // </a>
                    return $actionBtn;
                })
                ->rawColumns(['action', 'name'])
                ->make(true);
            return $dataTable;
        } else {
            return response()->json(['text'=>'only ajax request']);
        }
    }

    public function getAllSympthom(Request $request, $kategori_penyakit) 
    {
        if($request->ajax()) {
            $symptoms = SymptomDiseaseCategory::where('disease_category_id', $kategori_penyakit)->get();
            $dataTable = DataTables::of($symptoms)
                ->addIndexColumn()
                ->addColumn('diseaseName', function($row){
                    $name = '';
                    $name = $row->symptom_category->name;
                    return $name;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                            <a href="'.route("pakar.gejala.show", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                    Detail
                                </a>
                                <a href="'.route("pakar.gejala.edit", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteDiseaseCategory('.$row->id.')">
                                <i class="fas fa-edit"></i>
                                Hapus
                            </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'name'])
                ->make(true);
            return $dataTable;
        } else {
            return response()->json(['text'=>'only ajax request']);
        }
    }
}
