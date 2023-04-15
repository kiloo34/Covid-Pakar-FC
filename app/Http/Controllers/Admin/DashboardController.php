<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // dd('masuk');
        return view('admin.dashboard.index', [
            'title' => 'dashboard',
            'subtitle' => '',
            'data' => '',
            'active' => 'dashboard',
        ]);
    }
}
