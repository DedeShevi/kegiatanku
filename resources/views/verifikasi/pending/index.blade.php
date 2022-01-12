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
                                @foreach($pendings as $pembayaran)
                                <tr>
                                    <td>
                                        <a href="{{route('user.ambil-form', $pembayaran->id)}}"
                                            class="btn btn-outline-info btn-sm">
                                            {{$pembayaran->activity->kode_activity}}
                                        </a>
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
                        {{$pendings->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection