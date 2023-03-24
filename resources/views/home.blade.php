@extends('layouts.master')
@section('judul_sub')
Halaman Utama Sesudah Login
@endsection
@section('content')
<div class="h2 mb-3 text-center">Aplikasi E-KPU</div>
<hr style="width:75%">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Aplikasi E-KPU</h6>
    </div>
    <div class="card-body">
        <!-- <div class="h2">Project 2 - Aplikasi Kasir (Laravel Project)</div> -->
        <ul>
            <li>Mengecek data pemilih berdasarkan nomor induk kependudukan</li>
            <li>Authentikasi login admin</li>
            <li>Mencatat / import data pemilih pada tps di kecamatan maupun kabupaten</li>
            <li>Menampilkan data pemilih yang telah terdaftar</li>
            <li>Menyimpan data kedalam sistem</li>

            <li>Pengaturan profile</li>
            <!-- <li>Menampilkan daftar transaksi pembelian barang</li> -->
            <!-- <li>Pengaturan data pengguna</li> -->
        </ul>
    </div>
</div>
@endsection