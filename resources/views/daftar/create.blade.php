@extends('welcome')

@section('content')

<div class="container mb-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="{{url('storage/'. $activity->image)}}" width="100px" height="100px" class="rounded">
                            <div class="ml-3">
                                <h3 class="text-danger">{{$activity->nama_activity}}</h3>
                                <small class="text-muted">{{$activity->created_at->diffForHumans()}}</small>
                                <p>
                                    {{$activity->desc}}
                                </p>

                                <div>
                                    <h6>Start {{$activity->tgl_awal}} - {{$activity->tgl_selesai}}</h6>
                                    <h6>{{$activity->peserta}} - Seat </h6>
                                    <h6>IDR {{number_format($activity->idr,3)}}</h6>
                                </div>
                            </div>
                        </div>
                        <div>
                            @if ($activity->status == 'Aktif')
                            <h4 class="text-success">{{$activity->status}}</h4>
                            @else
                                <h4 class="text-muted">{{$activity->status}}</h4>
                            @endif                           
                        </div>
                    </div>
                </div>
            </div>
            @auth()
                <div class="card-footer">
                    <form action="{{route('kegiatan.store')}}" method="post">
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
                                    <input type="text" class="form-control" value="{{$activity->kode_activity}}">
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
                                <button type="submit" class="btn btn-primary"> Beli Tiket</button>
                            </div>
                        </div>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</div>

@endsection