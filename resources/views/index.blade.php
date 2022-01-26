@extends('welcome')

@section('content')

<div class="container">
    <div class="row" style="margin-top: -70px;">
        @foreach($kegiatans as $kegiatan)
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <h3 class="text-danger">{{$kegiatan->nama_activity}}</h3>
                    <p class="text-muted">
                        {{str_limit(strip_tags($kegiatan->desc), 50)}}
                    </p>
                    <div>
                        @if (strlen(strip_tags($kegiatan->desc)) > 50)
                        <a href="" class="btn btn-outline-info btn-sm">Read More
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
<div class="row py-4">
    @foreach ($activitys as $activity)
        <div class="col-md-12">
            <div class="card-border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                        <img src="{{url('storage/'. $activity->image)}}" alt="" width="100px" height="100px" class="rounded">
                            <div>
                                <h3 class="text-danger">{{$activity->nama_activity}}</h3>
                                <p class ="text-muted">
                                    {{str_limit(strip_tags($activity->desc), 100)}}
                                </p>
                                <small class="text-info">
                                    {{$activity->status}}, {{$activity->created_at->diffForHumans()}}
                                </small>
                            </div>
                        </div>
                        <div>
                            <a href="{{route('kegiatan.create', $activity->id)}}" class="btn btn-info">
                            Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection