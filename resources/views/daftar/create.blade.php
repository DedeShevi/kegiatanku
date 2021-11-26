@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card border">
                <div class="card-body">
                    <img src="{{url('storage/'. $activity->image)}}" alt="" class="img-card-top" srcset="" style="height: 250px" width="250px">
                
                    <div class="mt-2">
                        <div class="d-flex">
                            <p>Kode Kegiatan :</p>
                            <p class="ml-2">{{$activity->kode_activity}}</p>
                        </div>
                        <div class="d-flex">
                            <p>Kode Kegiatan :</p>
                            <p class="ml-2">{{$activity->nama_activity}}</p>
                        </div>
                        <div class="d-flex">
                            <p>Tanggal Mulai :</p>
                            <p class="ml-2">{{$activity->tgl_awal}}</p>
                        </div>
                        <div class="d-flex">
                            <p>Peserta :</p>
                            <p class="ml-2">{{$activity->jumlah_peserta}}</p>
                        </div>
                        <div class="d-flex">
                            <p>Kode Kegiatan :</p>
                            <p class="ml-2">{{$activity->status}}</p>
                        </div>
                        <div class="alert alert-dark">
                            <p class="ml-2">{{$activity->desc}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    @guest
                        <div class="d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="250px" height="250px" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
                                <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/>
                              </svg>

                        </div>
                        <div class="alert alert-danger mt-3 text-center text-dark">
                                Silahkan Login Terlebih dahulu
                            </div>
                    @else
                        <form action="{{route('kegiatan.store', $activity->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Kode Kegiatan</label>
                                        <input type="text" class="form-control"  value="{{$activity->kode_activity}}">
                                        <input type="hidden" class="form-control" name="activity_id" value="{{$activity->id}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="text" class="form-control" value="{{$activity->idr}}">
                                    </div>
                                </div>
                                <input type="hidden" name="status" class="form-control" value="pending">
                                <div class="ml-3">
                                    <button type="submit" class="btn btn-info">Simpan pendaftaran</button>
                                </div>
                            </div>
                        </form> 
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>

@endsection