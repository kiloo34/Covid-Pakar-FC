<?php

namespace App\Http\Controllers\Pakar;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use App\Models\DiseaseCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DiseaseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pakar.disease.index', [
            'title'     => 'kategori_penyakit',
            'subtitle'  => '',
            'data'      => '',
            'active'    => 'diseaseCategory'
        ]);
    }
    
    public function getAllData(Request $request)
    {
        if($request->ajax()) {
            $datas = Disease::all();
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
                    $actionBtn = '<a href="'.route("pakar.kategori_penyakit.index", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                    Detail
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
