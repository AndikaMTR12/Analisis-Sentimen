<?php

namespace App\Imports;

use App\Models\dataKomen;
use Maatwebsite\Excel\Concerns\ToModel;

class dataKomenImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new dataKomen([
            'nama' => $row[1],
            'komentar' => $row[2],
            'sentimen' => $row[3]
        ]);
    }
}
