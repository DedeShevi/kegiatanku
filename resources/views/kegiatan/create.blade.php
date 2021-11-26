@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Kegiatan</li> 
               </ol>
             </nav>

             <div class="card">
                 <div class="card-body">
                     <div class="alert alert-primary" role="alert">
                         <h3>Perhatian !!!</h3>
                            Silahkan isi dibawah ini dengan benar.
                     </div>

                     <form action="{{route('manage-kegiatan.store')}}" method="post" enctype="multipart/form-data">
                         @csrf

                         <div class="row">
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">Nama Kegiatan</label>
                                     <input type="text" name="nama_activity" class="form-control" id="" placeholder="nama kegiatan">
                                 </div>
                             </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">image</label>
                                        <input type="file" name="image" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">IDR</label>
                                        <input type="text" name="idr" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="">Silahkan Pilih Status</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non-Aktif">Non-Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Keterangan</label>
                                        <input type="text" name="desc" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Jumlah Peserta</label>
                                        <input type="text" name="jumlah_peserta" class="form-control" id="" >
                                    </div>
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Tanggal Mulai</label>
                                        <input type="date" name="tgl_awal" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Tanggal Selesai</label>
                                        <input type="date" name="tgl_selesai" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
                         </div>
                     </form>
                 </div>
             </div>
    </div>
@endsection