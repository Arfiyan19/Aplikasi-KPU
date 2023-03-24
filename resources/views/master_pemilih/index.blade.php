@extends('layouts.master')
@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css" />
@endpush
@section('judul')
Aplikasi E-KPU
@endsection
@section('judul_sub')
Data Pemilih
@endsection
@section('content')
<a href="{{ url('pemilih/create') }}" style="margin-right: 10px;"><button type="button" class="btn btn-outline-primary"><i class="fas fa-plus-square" style="margin-right: 5px;"></i>Tambah</button></a>
<!-- //bulk import  -->
<button style="margin-right: 10px;" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#importExcel"><i class="fas fa-file-import" style="margin-right: 5px;"></i>Import</button>

<a href="{{ route('pdf-pemilih') }}"><button type="button" class="btn btn-outline-danger"><i class="fas fa-file-pdf"></i></button></a>
<a href="{{ route('print-pemilih') }}"><button type="button" class="btn btn-outline-warning"><i class="fas fa-print"></i></button></a>
<a href="{{ route('excel-pemilih') }}"><button type="button" class="btn btn-outline-success"><i class="fas fa-file-excel"></i></button></a>
<div class="h2 mb-3 text-center">Data Pemilih</div>
<hr style="width:75%">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kumpulan Data Pemilih</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>NO KK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
                        <th>TPS</th>
                        <th>Status DPT</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>NO KK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
                        <th>TPS</th>
                        <th>Status DPT</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($pemilih as $item => $key)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $key->nik }}</td>
                        <td>{{ $key->nokk }}</td>
                        <td>{{ $key->nama }}</td>
                        <td>{{ $key->tempat_lahir }}</td>
                        <td>{{ $key->tanggal_lahir }}</td>
                        <td>{{ $key->jenis_kelamin }}</td>
                        <td>{{ $key->desa }}</td>
                        <td>{{ $key->kecamatan }}</td>
                        <td>{{ $key->tps }}</td>
                        <td>{{ $key->status_dpt }}</td>


                        <td class="text-center">
                            <a href="/pemilih/{{$key->nik}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                            @auth
                            <a href="/pemilih/{{$key->nik}}/edit" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>

                            <form action="/pemilih/{{$key->nik}}" method="POST" class="display-non">
                                @csrf
                                @method('DELETE')
                                <button input type="submit" class="btn btn-outline-danger my-1" value="Delete"><i class="far fa-trash-alt"></i></button>
                            </form>
                            <!-- {{-- <a href="/transaksi-pembelian-barang/{{$key->id}}/create" class="btn
                            btn-outline-success"><i class="fas fa-shopping-cart"></i></a> --}} -->
                            @endauth
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- if button cari klik  -->

<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="{{ route('import-excel') }}" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}

                    <label>Pilih file excel</label>
                    <div class="form-group">
                        <input type="file" name="file" required="required">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </form>
    </div>
</div>




@push('scripts')
<script>
    // $(function() {
    //     $("#example1").DataTable();
    // });
    $(document).ready(function() {
        $('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>
<!-- copyHtml5 -->
<!-- excelHtml5 -->
<!-- csvHtml5 -->
<!-- pdfHtml5 -->
<!-- print -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>

@endpush
@endsection