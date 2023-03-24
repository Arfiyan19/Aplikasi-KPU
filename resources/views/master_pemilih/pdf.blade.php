<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kumpulan Data PDF Pemilih</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .page-break {
            page-break-after: always;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th {
            color: white;
            background-color: rgb(0, 0, 0);
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>
    <center>
        <h3>Kumpulan Data Pemilih</h3>
        <hr style="width:75%">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div>
                <div style="overflow-x:auto;"">
                <table width=" 100%" cellspacing="0">
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
                        </tr>
                    </thead>
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
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>
</body>

</html>