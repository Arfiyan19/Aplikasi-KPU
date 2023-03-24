<?php

namespace App\Http\Controllers;

use App\Exports\PemilihExport;
use App\Imports\PemilihImport;
use App\Models\Pemilih;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Support\Facades\DB;

class PemilihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemilih = Pemilih::all();
        return view('master_pemilih.index', compact('pemilih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master_pemilih.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nokk' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'tps' => 'required',
            'status_dpt' => 'required',
        ]);
        Pemilih::create([
            "nik" => $request["nik"],
            "nokk" => $request["nokk"],
            "nama" => $request["nama"],
            "tempat_lahir" => $request["tempat_lahir"],
            "tanggal_lahir" => $request["tanggal_lahir"],
            "jenis_kelamin" => $request["jenis_kelamin"],
            "desa" => $request["desa"],
            "kecamatan" => $request["kecamatan"],
            "tps" => $request["tps"],
            "status_dpt" => $request["status_dpt"],
        ]);

        return redirect('/pemilih')->with('success', 'Data Pemilih Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function show(Pemilih $pemilih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        $pemilih = Pemilih::where('nik', $nik)->first();
        return view('master_pemilih.edit', compact('pemilih'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {
        $request->validate([
            'nik' => 'required',
            'nokk' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'tps' => 'required',
            'status_dpt' => 'required',
        ]);
        // $pemilih = db::table('pemilihs')->where('nik', $nik)->first();
        // $pemilih->nik = $request->nik;
        // $pemilih->nokk = $request->nokk;
        // $pemilih->nama = $request->nama;
        // $pemilih->tempat_lahir = $request->tempat_lahir;
        // $pemilih->tanggal_lahir = $request->tanggal_lahir;
        // $pemilih->jenis_kelamin = $request->jenis_kelamin;
        // $pemilih->desa = $request->desa;
        // $pemilih->kecamatan = $request->kecamatan;
        // $pemilih->tps = $request->tps;
        // $pemilih->status_dpt = $request->status_dpt;
        // //create
        $pemilih = db::table('pemilihs')->where('nik', $nik)->update([
            "nik" => $request["nik"],
            "nokk" => $request["nokk"],
            "nama" => $request["nama"],
            "tempat_lahir" => $request["tempat_lahir"],
            "tanggal_lahir" => $request["tanggal_lahir"],
            "jenis_kelamin" => $request["jenis_kelamin"],
            "desa" => $request["desa"],
            "kecamatan" => $request["kecamatan"],
            "tps" => $request["tps"],
            "status_dpt" => $request["status_dpt"],
        ]);



        // $pemilih->update([
        //     "nik" => $request["nik"],
        //     "nokk" => $request["nokk"],
        //     "nama" => $request["nama"],
        //     "tempat_lahir" => $request["tempat_lahir"],
        //     "tanggal_lahir" => $request["tanggal_lahir"],
        //     "jenis_kelamin" => $request["jenis_kelamin"],
        //     "desa" => $request["desa"],
        //     "kecamatan" => $request["kecamatan"],
        //     "tps" => $request["tps"],
        //     "status_dpt" => $request["status_dpt"],
        // ]);



        // return dd($pemilih);
        return redirect('/pemilih')->with('success', 'Data Pemilih Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        $pemilih = DB::table('pemilihs')->where('nik', $nik)->delete();
        return redirect('/pemilih')->with('success', 'Data Pemilih Berhasil Dihapus');
    }
    //public function import_excel(Request $request)
    public function import_excel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $nama_file = rand() . $file->getClientOriginalName();
        $file->move('file_pemilih', $nama_file);

        Excel::import(new PemilihImport, public_path('/file_pemilih/' . $nama_file));

        return redirect('/pemilih')->with('success', 'Data Pemilih Berhasil Diimport');
    }
    // public funtion pdf
    public function cetak_pdf()
    {
        $pemilih = Pemilih::all();
        $pdf = PDF::loadview('master_pemilih.pdf', ['pemilih' => $pemilih]);
        //convert lanscape
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('laporan-pemilih-pdf');
    }
    //priny 
    public function print()
    {
        $pemilih = Pemilih::all();
        //set pepper
        $pdf = PDF::loadview('master_pemilih.print', ['pemilih' => $pemilih]);
        //convert lanscape
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();

        // return view('master_pemilih.print', compact('pemilih'));
    }
    //atwebsite\E
    public function excel()
    {
        return Excel::download(new PemilihExport, 'pemilih.xlsx');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        // $cari = $request->nik;
        $request->validate([
            'nik' => 'required',
        ]);
        $cari = $request->nik;
        // mengambil data dari table pegawai sesuai pencarian data
        // $request 16 digit 
        $pemilih = Pemilih::where('nik', 'like', "%" . $cari . "%")->get();
        // $dataAnggotawherenoKK = Pemilih::where('no_kk', 'like', "%" . $pemilih->no_kk . "%")->get();
        // return view('welcomeCari', ['status' => false, 'messege' => 'Data Pemilih Tidak Ditemukan']);
        // return view('welcomeCari', ['status' => false, 'messege' => 'Data Pemilih Tidak Ditemukan']);
        // if (count($pemilih) > 0) {
        $nokk = [];
        foreach ($pemilih as $key => $value) {
            $nokk[] = $value->nokk;
        }
        $nik2 = [];
        foreach ($pemilih as $key => $value) {
            $nik2[] = $value->nik;
        }
        if (count($nokk) > 0) {
            // $pemilihnoKK = Pemilih::whereIn('nokk', $nokk)->get();
            $pemilihnoKK = Pemilih::where('nokk', 'like', "%" . $nokk[0] . "%")->whereNotIn('nik', $nik2)->get();
        } else {
            $pemilihnoKK = [];
        }
        // jika nokk sendiri anggota cuma cendiri 
        // if (count($pemilihnoKK) == 0) {
        //     $pemilihnoKK = Pemilih::where('nokk', 'like', "%" . $pemilih->nokk . "%")->get();
        // }



        // return dd($pemilihnoKK);
        if ($pemilih == null) {
            return view('welcomeCari', ['status' => false, 'messege' => 'Data Pemilih Tidak Ditemukan']);
        } else {
            // return dd($pemilihnoKK);
            return view('welcomeCari', ['status' => true, 'messege' => 'Data Pemilih Ditemukan', 'pemilih' => $pemilih, 'pemilihnoKK' => $pemilihnoKK]);
        }
        // return view('welcomeCari', ['status' => true, 'messege' => 'Data Pemilih Ditemukan', 'pemilih' => $pemilih, 'pemilihnoKK' => $pemilihnoKK]);
        // } else {
        // }
    }
}
