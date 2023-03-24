<?php

namespace App\Exports;

use App\Models\Pemilih;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class PemilihExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $table = DB::table('pemilihs')->get();
        $arrayData = [];
        foreach ($table as $key => $value) {
            $arrayData[] = [
                'nik' => strval($value->nik),
                'nokk' => strval($value->nokk),
                'nama' => $value->nama,
                'tempat_lahir' => $value->tempat_lahir,
                'tanggal_lahir' => $value->tanggal_lahir,
                'jenis_kelamin' => $value->jenis_kelamin,
                'desa' => $value->desa,
                'kecamatan' => $value->kecamatan,
                'tps' => $value->tps,
                'status_dpt' => $value->status_dpt,
            ];
        }
        return collect($arrayData);


        // $table = DB::table('pemilihs')
        // ->select('nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'desa', 'kecamatan', 'tps', 'status_dpt')
        // ->get();
        return $table;
    }
    public function columnFormats(): array
    {
        return [
            'nik' => NumberFormat::FORMAT_NUMBER,
            'nokk' => NumberFormat::FORMAT_NUMBER,
            'tanggal_lahir' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'jenis_kelamin' => NumberFormat::FORMAT_TEXT,
            'desa' => NumberFormat::FORMAT_TEXT,
            'kecamatan' => NumberFormat::FORMAT_TEXT,
            'tps' => NumberFormat::FORMAT_NUMBER,
            'status_dpt' => NumberFormat::FORMAT_TEXT,

        ];
    }
}
