<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\Pemilih;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class PemilihImport implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        // $pemilih = DB::table('pemilihs')->where('nik', $row[0])->first();
        return new Pemilih([
            'nik' => $row[0],
            'nokk' => $row[1],
            'nama' => $row[2],
            'tempat_lahir' => $row[3],
            'tanggal_lahir' => date('Y-m-d', strtotime($row[4])),
            'jenis_kelamin' => $row[5],
            'desa' => $row[6],
            'kecamatan' => $row[7],
            'tps' => $row[8],
            'status_dpt' => $row[9],
        ]);
    }
}
