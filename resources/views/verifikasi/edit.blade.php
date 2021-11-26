@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Edit Data Peserta</li> 
               </ol>
             </nav>

             <div class="card">
                 <div class="card-body">
                     <div class="alert alert-primary" role="alert">
                         <h3>Perhatian !!!</h3>
                            Silahkan isi dibawah ini dengan benar.
                     </div>

                     <form action="" method="post">
                         @csrf

                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label for="">Kode Kegiatan</label>
                                     <input type="text" name="kode_kegiatan" class="form-control" id="">
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label for="">NISN</label>
                                     <input type="text" name="nisn" class="form-control" id="" >
                                 </div>
                             </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">TGL Daftar</label>
                                        <input type="date" name="tgl_daftar" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="daftar_ulang" id="daftar_ulang" class="form-control">
                                            <option value="Silahkan Pilih Status">- Silahkan Pilih Status </option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak Aktif">Non Aktif</option>
                                        </select>
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