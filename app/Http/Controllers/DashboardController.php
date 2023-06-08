<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $datakomen = DB::table('data_komens')->count();
        $train = DB::table('data_komens')
            ->skip(325)
            ->take(650)
            ->get()
            ->count();
        $testing = DB::table('data_komens')
            ->limit(325)
            ->get()
            ->count();
        return view('dashboard.index', [
            'title' => $title,
            'datakomen' => $datakomen,
            'testing' => $testing,
            'train' => $train
        ]);
    }
}
