@extends('layouts.app')

@section('content')
   <div class="content">
       <div class="row">
           <div class="col-md-6 offset-md-3">
               <div class="card border-0">
                   <div class="card-body">
                       <div class="alert alert-info" role="alert">
                        <h4>Hello, {{$pembayaran->user->name}}</h4>
                        Silahkan masukkan bukti pembayaran anda.       
                        </div> 

                        <form action="{{route('user-verifikasi-pembayaran', $pembayaran->id)}}" enctype="multipart/form-data"  method="post">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="register_id" class="form-control"
                                     value="{{$pembayaran->id}}" id="" >

                                    <input type="text" name="" class="form-control"
                                     value="{{$pembayaran->activity->kode_activity}}" id="" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" id="">
                                    </div>
                                </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="description" id="" class="form-control">
                                    
                                    </textarea>
                                </div>
                             </div>
                         </div>
                         <div>
                             <button class="btn btn-success">Simpan</button>
                         </div>
                        </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection