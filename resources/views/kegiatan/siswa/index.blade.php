@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        @foreach ($myActivitys as $myActivity)
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-header border-0">
                        <img src="{{url('storage/'. $myActivity->activity->image)}}" style="width: 400px" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">{{$myActivity->activity->nama_activity}}</h1>
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title">{{$myActivity->activity->tgl_awal}} - {{$myActivity->activity->tgl_selesai}}</h6>
                            <h6 class="card-title">{{$myActivity->activity->idr}}</h6>
                        </div>
                        <p>
                            {{$myActivity->activity->desc}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection