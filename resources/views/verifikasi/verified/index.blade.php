@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kegiatan</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>TGL. Daftar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($verifieds as $pembayaran)
                                <tr>
                                    <td>
                                         {{$pembayaran->activity->kode_activity}}
                                    </td>
                                    <td>Nis Belum</td>
                                    <td>{{$pembayaran->user->name}}</td>
                                    <td>{{$pembayaran->created_at->diffForHumans()}}</td>
                                    <td>
                                        <span class="badge bg-secondary text-white">
                                            {{$pembayaran->status}}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$verifieds->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection