<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Disease\StoreDiseaseRequest;
use App\Http\Requests\Admin\Disease\UpdateDiseaseRequest;
use App\Models\Disease;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
        $disease = new Disease;

        $disease->name = $request->name;
        $disease->code = $request->code;

        $disease->save();
        return redirect()->route('admin.penyakit.index')->with('success_msg', 'Data Penyakit ' . $request->name .' dengan kode ' . $request->code . ' berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disease $penyakit)
    {
        return view('admin.disease.show', [
            'title'     => 'penyakit',
            'subtitle'  => 'show',
            'disease'   => $penyakit,
            'active'    => 'disease'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disease $penyakit)
    {
        return view('admin.disease.edit', [
            'title'     => 'penyakit',
            'subtitle'  => 'show',
            'disease'   => $penyakit,
            'active'    => 'disease'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiseaseRequest $request, Disease $penyakit)
    {
        $penyakit->name = $request->name;
        $penyakit->code = $request->code;
        $penyakit->save();
        return redirect()->route('admin.penyakit.index')->with('success_msg', 'Data Penyakit ' . $request->name .' dengan kode ' . $request->code . ' berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disease $penyakit)
    {
        $penyakit->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus!'
        ]);
    }

    public function getAllData(Request $request)
    {
        if($request->ajax()) {
            $data = Disease::all();        
            return DataTables::of($data)
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
                    $actionBtn = '<a href="'.route("admin.penyakit.show", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                    Detail
                                </a>
                                <a href="'.route("admin.penyakit.edit", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteDisease('.$row->id.')">
                                    <i class="fas fa-edit"></i>
                                    Hapus
                                </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            return response()->json(['text'=>'only ajax request']);
        }
    }
}
