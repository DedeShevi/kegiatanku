<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Activity</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-white">
    <div class="content px-3">
        <div class="mb-3">
            <h3 class="text-info">Laporan Periode Activity</h3>
            <h5 class="text-muted">SMK AL-BAHRI</h5>
            <h5 class="text-muted">JL.Yon Armed No.07</h5>
            <hr>
            <h3 class="text-info">Data Peserta Valid</h3>
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Kode Kegiatan</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>               
                    <tr>
                    <td>{{$peserta->activity->kode_activity}}</td>
                    <td>{{$peserta->user->name}}</td>
                    <td>{{$peserta->activity->idr}}</td>
                    <td>{{$peserta->status}}</td>
                    <td>{{$peserta->activity->tgl_awal}}</td>
                    <td>{{$peserta->activity->tgl_selesai}}</td>
                    </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html>