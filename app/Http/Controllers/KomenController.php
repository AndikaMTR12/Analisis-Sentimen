<?php

namespace App\Http\Controllers;

use App\Models\dataKomen;
use Illuminate\Http\Request;
use App\Imports\dataKomenImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class KomenController extends Controller
{
    public function index()
    {
        $title = 'Data Komen';
        return view('dashboard.komen', [
            'title' => $title,
            'komen' => dataKomen::all()
        ]);
    }

    public function upload(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('dataKomen', $namafile);

        Excel::import(new dataKomenImport, \public_path('/dataKomen/' . $namafile));
        return redirect()->back();
    }

    public function komenHapus(DataKomen $dKomen)
    {
        dataKomen::destroy($dKomen->id);
        dataKomen::destroy($dKomen->id);
        return redirect('/data-komen');
    }

    public function komenHapussemua()
    {
        DB::table('data_komens')->delete();
        return redirect('/data-komen');
    }
}
