@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @role('admin')
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Total Siswa</h5>
                       </div>
                       <div>
                           <h3>{{$students}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Total Kegiatan</h5>
                       </div>
                       <div>
                           <h3>{{$activitys}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Total Peserta</h5>
                       </div>
                       <div>
                           <h3>{{$registers}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        @endrole
       {{-- Tampilan Bendahara --}}
        @role('bendahara')
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Pendaftaran</h5>
                           <h6 class="text-secondary">Pending</h6>
                       </div>
                       <div>
                           <h3>{{$pending}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Pendaftaran</h5>
                           <h6 class="text-secondary">Terverifikasi</h6>
                       </div>
                       <div>
                           <h3>{{$terverifikasi}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Total Peserta</h5>
                           <h6 class="text-secondary">Peserta</h6>
                       </div>
                       <div>
                           <h3>{{$registers}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        @endrole
        {{-- Tampilan Student --}}
        @role('student')
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Pendaftaran</h5>
                           <a href="{{route('pendaftaran.pending')}}" class="btn btn-outline-secondary btn-sm">
                           <h6 class="text-secondary">Pending</h6>
                           </a>
                       </div>
                       <div>
                           <h3>{{$delayed}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Pendaftaran</h5>
                           <a href="{{route('pendaftaran.verified')}}" class="btn btn-outline-secondary btn-sm">
                           <h6 class="text-secondary">Terverifikasi</h6>
                           </a>
                       </div>
                       <div>
                           <h3>{{$verified}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                       <div>
                           <h5>Total Peserta</h5>
                           <h6 class="text-secondary">Peserta</h6>
                       </div>
                       <div>
                           <h3>{{$participant}}</h3>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        @endrole
    </div>
</div>
@endsection