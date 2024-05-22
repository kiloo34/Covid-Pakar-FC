<?php

namespace App\Http\Controllers\Pakar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pakar\DiseaseCategory\StoreDiseaseCategoryRequest;
use App\Http\Requests\Pakar\DiseaseCategory\UpdateDiseaseCategoryRequest;
use App\Models\Disease;
use App\Models\DiseaseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class DiseaseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Disease $disease)
    {
        $datas = DiseaseCategory::where('disease_id', $disease->id)->get();
        return view('pakar.disease.category.index', [
            'title'         => 'kategori_penyakit',
            'subtitle'      => 'index',
            'data'          => '',
            'diseasesCat'   => $datas,
            'disease'       => $disease,
            'active'        => 'diseaseCategory'
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
            'diseases'  => Disease::all(),
            'active'    => 'diseaseCategory'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiseaseCategoryRequest $request)
    {
        $category = new DiseaseCategory;

        $category->name = $request->category;
        $category->code = Str::random(12);
        $category->disease_id = $request->disease;

        $category->save();
        return redirect()->route('pakar.kategori_penyakit.index')->with('success_msg', 'Data Kategori Penyakit ' . $request->name .' dengan kode ' . $request->code . ' berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(DiseaseCategory $kategori_penyakit)
    {
        return view('pakar.disease.category.show', [
            'title'     => 'kategori_penyakit',
            'subtitle'  => 'create',
            'data'      => '',
            'diseaseCat'=> $kategori_penyakit,
            'active'    => 'diseaseCategory'
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DiseaseCategory $kategori_penyakit)
    {
        return view('pakar.disease.category.edit', [
            'title'     => 'kategori_penyakit',
            'subtitle'  => 'edit',
            'data'      => '',
            'diseaseCat'=> $kategori_penyakit,
            'active'    => 'diseaseCategory'
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiseaseCategoryRequest $request, DiseaseCategory $kategori_penyakit)
    {
        $kategori_penyakit->name = $request->category;
        $kategori_penyakit->save();
        return redirect()
            ->route('pakar.kategori_penyakit.show', $kategori_penyakit->disease->id)
            ->with('success_msg', 'Data ' . $request->category .' berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DiseaseCategory $kategori_penyakit)
    {
        $kategori_penyakit->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus!'
        ]);
    }

    public function getAllDataCategory(Request $request, $diseaseId)
    {
        if($request->ajax()) {
            $datas = DiseaseCategory::where('disease_id', $diseaseId)->get();
            return DataTables::of($datas)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    $name = '';
                    $name = $row->name;
                    return $name;
                })
                ->addColumn('code', function($row){
                    $code = '';
                    $code = ucwords($row->code);
                    return $code;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route("pakar.kategori_penyakit.show", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                    Detail
                                </a>
                                <a href="'.route("pakar.kategori_penyakit.edit", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteDiseaseCategory('.$row->id.')">
                                    <i class="fas fa-edit"></i>
                                    Hapus
                                </a>
                                ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            return response()->json(['text'=>'only ajax request']);
        }
    }
}
