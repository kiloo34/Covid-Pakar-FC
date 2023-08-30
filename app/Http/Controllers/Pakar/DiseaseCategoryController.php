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
    public function index()
    {
        return view('pakar.disease.index', [
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
    public function show(Disease $kategori_penyakit)
    {
        return view('pakar.disease.category.index', [
            'title'     => 'kategori_penyakit',
            'subtitle'  => 'create',
            'data'      => '',
            'disease'   => $kategori_penyakit,
            'active'    => 'diseaseCategory'
        ]); 
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
    public function destroy(DiseaseCategory $kategori_penyakit)
    {
        $kategori_penyakit->delete();
        return response()->json([
            'message' => 'Data Order berhasil dihapus!'
        ]);
    }

    public function getAllData(Request $request)
    {
        // if($request->ajax()) {
            $datas = Disease::all();
            // dump($datas->load('categories'));
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
                ->addColumn('total', function($row){
                    $total = '';
                    // dump($row->categories);
                    $total = DiseaseCategory::where('disease_id', $row->id)->count();
                    // $total = $row->category == null ? 0 : count($row->category);
                    return $total;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route("pakar.kategori_penyakit.show", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                    Detail
                                </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        // } else {
        //     return response()->json(['text'=>'only ajax request']);
        // }
    }
    public function getAllDataCategory(Request $request, $diseaseId)
    {
        // if($request->ajax()) {
            $datas = DiseaseCategory::where('disease_id', $diseaseId)->get();
            // dump($datas);
            // dd('masuk');
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
                // ->addColumn('total', function($row){
                //     $total = '';
                //     // dump($row->categories);
                //     $total = $row->category == null ? 0 : count($row->category);
                //     return $total;
                // })
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
        // } else {
        //     return response()->json(['text'=>'only ajax request']);
        // }
    }
}
