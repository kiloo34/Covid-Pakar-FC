<?php

namespace App\Http\Controllers\Pakar;

use App\Http\Controllers\Controller;
use App\Models\Symptom;
use App\Models\SymptomCategory;
use App\Models\SymptomDiseaseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class SymptomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Symptom $gejala)
    {
        return view('pakar.symptom.category.index', [
            'title'     => 'gejala',
            'subtitle'  => '',
            'symptom'   => $gejala,
            'active'    => 'symptom'
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SymptomCategory $kategori_gejala)
    {
        return view('pakar.symptom.category.show', [
            'title'     => 'gejala',
            'subtitle'  => 'show',
            'category'  => $kategori_gejala,
            'active'    => 'symptom'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SymptomCategory $kategori_gejala)
    {
        return view('pakar.symptom.category.edit', [
            'title'     => 'gejala',
            'subtitle'  => 'edit',
            'category'  => $kategori_gejala,
            'active'    => 'symptom'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SymptomCategory $kategori_gejala)
    {
        $kategori_gejala->name = $request->category;
        $kategori_gejala->save();
        return redirect()
            ->route('pakar.kategoriGejala.index', $kategori_gejala->symptom->id)
            ->with('success_msg', 'Data ' . $request->category .' berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SymptomCategory $kategori_gejala)
    {
        DB::transaction(function () use ($kategori_gejala): void {
            $sdc = SymptomDiseaseCategory::where('symptom_category_id', $kategori_gejala->id)->first();
            $sdc->delete();
            $kategori_gejala->delete();
        });
        
        return response()->json([
            'message' => 'Data berhasil dihapus!'
        ]);
    }

    public function getCategorySympthom(Request $request, $symptom) 
    {
        // if($request->ajax()) {
            $symptoms = SymptomCategory::where('symptom_id', $symptom)->get();
            $dataTable = DataTables::of($symptoms)
                ->addIndexColumn()
                ->addColumn('categoryName', function($row){
                    $name = '';
                    $name = $row->name;
                    return $name;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                                <a href="'.route("pakar.kategori_gejala.show", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                    Detail
                                </a>
                                <a href="'.route("pakar.kategori_gejala.edit", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteSymptomCategory('.$row->id.')">
                                    <i class="fas fa-edit"></i>
                                    Hapus
                                </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'name'])
                ->make(true);
            return $dataTable;
        // } else {
        //     return response()->json(['text'=>'only ajax request']);
        // }
    }
}
