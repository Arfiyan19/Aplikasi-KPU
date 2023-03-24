@extends('layouts.master')
@push('style')
<script src="https://cdn.tiny.cloud/1/uf5lkyxtnybuxubv009ys4y6al6h3c4zghyfd2o1lori9hwx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endpush
@section('judul_sub')
Tambah Data Pemilih
@endsection
@section('content')
<div class="h2 mb-3 text-center">Tambah Data Pemilih</div>
<hr style="width:75%">
<form action="/pemilih" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- //nik  -->
    <div class="form-group">
        <label for="nik">NIK </label>
        <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan Nomor Induk Kependudukan">
        @error('nik')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- //nokk  -->
    <div class="form-group">
        <label for="nokk">No KK </label>
        <input type="text" class="form-control" name="nokk" id="nokk" placeholder="Masukkan Nomor Kartu Keluarga">
        @error('nokk')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- //nama  -->
    <div class="form-group">
        <label for="nama">Nama </label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
        @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Tempat Lahir -->
    <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
        @error('tempat_lahir')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Tanggal Lahir -->
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
        @error('tanggal_lahir')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Jenis Kelamin -->
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
            <!-- //PILIH  -->
            <option value="">Pilih</option>
            <option value="L">L</option>
            <option value="P">P</option>
        </select>
        @error('jenis_kelamin')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Desa -->
    <div class="form-group">
        <label for="desa">Desa</label>
        <input type="text" class="form-control" name="desa" id="desa" placeholder="Masukkan Desa">
        @error('desa')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Kecamatan -->
    <div class="form-group">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan">
        @error('kecamatan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- TPS -->
    <div class="form-group">
        <label for="tps">TPS</label>
        <input type="text" class="form-control" name="tps" id="tps" placeholder="Masukkan TPS">
        @error('tps')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>

    <!-- Status DPT -->
    <div class="form-group">
        <label for="status_dpt">Status DPT</label>
        <select class="form-control" name="status_dpt" id="status_dpt">
            <option value="Terdaftar di DPT">Terdaftar di DPT</option>
            <option value="Tidak Terdaftar di DPT">Tidak Terdaftar di DPT</option>
        </select>
        @error('status_dpt')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>



    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="{{ url('pemilih') }}" class="btn btn-danger">Kembali</a>
</form>
@push('scripts')
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });
</script>
@endpush
@endsection