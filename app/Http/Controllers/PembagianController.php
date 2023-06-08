<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembagianController extends Controller
{
    // public function index()
    // {
    //     $title = 'Pembagian Data';
    //     return view('dashboard.pembagian', [
    //         'title' => $title,
    //         'train' => '',
    //     ]);
    // }

    public function pembagian(Request $request)
    {
        $title = 'Pembagian Data';
        if ($request->nilai == 90) {
            $train = DB::table('data_komens')
                ->limit(585)
                ->get();
            $test = DB::table('data_komens')
                ->skip(585)
                ->take(650)
                ->get();
            $accuracytrain = number_format((186 + 139 + 101) / (585) * 100, 1);
            $recalltrain = number_format(((0.8 + 0.8 + 0.6) / 3) * 100, 1);
            $precissiontrain = number_format((0.8 + 0.7 + 0.6) / (3) * 100, 1);
            $accuracytest = number_format(53 / 64 * 100, 1);
            $recalltest = number_format((0.8 + 0.8 + 0.8) / 3 * 100, 1);
            $precissiontest = number_format((0.9 + 0.9 + 0.5) / 3 * 100, 1);
        } elseif ($request->nilai == 80) {
            $train = DB::table('data_komens')
                ->limit(520)
                ->get();
            $test = DB::table('data_komens')
                ->skip(520)
                ->take(650)
                ->get();
            $accuracytrain = number_format((379 / 520) * 100, 1);
            $recalltrain = number_format(((0.8 + 0.8 + 0.6) / 3) * 100, 1);
            $precissiontrain = number_format((0.8 + 0.7 + 0.6) / (3) * 100, 1);
            $accuracytest = number_format((101 / 130) * 100, 1);
            $recalltest = number_format((0.8 + 0.8 + 0.7) / 3 * 100, 1);
            $precissiontest = number_format((0.8 + 0.8 + 0.6) / 3 * 100, 1);
        } else {
            $train = DB::table('data_komens')
                ->limit(455)
                ->get();
            $test = DB::table('data_komens')
                ->skip(455)
                ->take(650)
                ->get();
            $accuracytrain = number_format((324 / 455) * 100, 1);
            $recalltrain = number_format(((0.7 + 0.8 + 0.6) / 3) * 100, 1);
            $precissiontrain = number_format((0.8 + 0.7 + 0.6) / (3) * 100, 1);
            $accuracytest = number_format((156 / 195) * 100, 1);
            $recalltest = number_format((0.8 + 0.7 + 0.8) / 3 * 100, 1);
            $precissiontest = number_format((0.8 + 0.8 + 0.7) / 3 * 100, 1);
        }
        return view('dashboard.pembagian', [
            'title' => $title,
            'train' => $train,
            'test' => $test,
            'accuracytrain' => $accuracytrain,
            'recalltrain' => $recalltrain,
            'precissiontrain' => $precissiontrain,
            'accuracytest' => $accuracytest,
            'recalltest' => $recalltest,
            'precissiontest' => $precissiontest,
        ]);
    }
}
