@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3" style="margin-top: -70px">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{route('verifikasi-pendaftaran.ulang')}}" class="btn btn-primary">Daftar Ulang</a>
                            <a href="{{route('verifikasi-pendaftaran.peserta')}}" class="btn btn-secondary">Peserta</a>
                        </div>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                               <div>
                                   <button type="submit" class="btn btn-secondary">Cari Data</button>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
              <div class="row">
                 <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="mt-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Kegiatan</th>
                                            <th>NISN</th>
                                            <th>Nama</th>
                                            <th>TGL Daftar</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registers as $register)
                                            
                                        <tr>
                                            <td>{{$register->activity->kode_activity}}</td>
                                            <td>Field belum dibuat</td>
                                            <td>{{$register->user->name}}</td>
                                            <td>{{$register->created_at->diffForHumans()}}</td>
                                            <td>
                                                <span class="badge badge-info">
                                                    {{$register->status}}</td>
                                                </span>                               
                                            <td>
                                                <form action="{{route('verifikasi-pendaftaran.accept', $register->id)}}" method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button class="btn btn-info btn-sm">Tambah Peserta</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   </div>
              </div>
         </div>
     </div>
@endsection