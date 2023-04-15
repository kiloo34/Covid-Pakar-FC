<?php

namespace App\Http\Controllers\Pakar;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pakar.dashboard.index', [
            'title' => 'dashboard',
            'subtitle' => '',
            'data' => '',
            'active' => 'dashboard',
        ]);
    }
}
