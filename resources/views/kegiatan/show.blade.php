@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($activitys as $activity)
        <div class="col-md-3">
                <div class="card" >
                    <img src="{{url('storage/'. $activity->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$activity->nama_activity}}</h5>
                        <h6 class="card-title">{{$activity->tgl_awal}} - {{$activity->tgl_selesai}}</h6>
                        <h6 class="card-title">{{$activity->idr}}</h6>
                        <h6 class="card-title">{{$activity->peserta}}</h6>
                        @if($activity->status == 'Cooming Soon')
                                <button type="button" class="btn btn-info btn-block" disabled>{{$activity->status}}</button>
                        @elseif($activity->status == 'Aktif')
                            <a href="{{route('kegiatan.create', $activity->id)}}" class="btn btn-success btn-block">Daftar</a>
                        @elseif($activity->status == 'Non-Aktif')
                                <button type="button" class="btn btn-secondary btn-block" disabled>{{$activity->status}}</button>
                            
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection