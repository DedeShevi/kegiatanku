@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Edit Data Siswa</li> 
               </ol>
             </nav>

             <div class="card">
                 <div class="card-body">
                     <div class="alert alert-primary" role="alert">
                         <h3>Perhatian !!!</h3>
                            Silahkan isi dibawah ini dengan benar.
                     </div>

                     <form action="{{route('updated.data.siswa', $user->id)}}" method="post">
                         @csrf
                         @method('PATCH')
                         <div class="row">
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">NISN</label>
                                     <input type="text" name="nisn" class="form-control" id="" value="{{$user->students->first()->nisn ?? 'Belum Tersedia'}}">
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">Nama</label>
                                     <input type="text" class="form-control" id="" value="{{$user->name}}" placeholder="isi nama siswa">
                                 </div>
                             </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <select name="gender" id="" class="form-control">
                                            <option value="">Silahkan Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                 </div> 
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">Agama</label>
                                     <select name="religion" id="" class="form-control">
                                         <option value="">Silahkan Pilih Agama</option>
                                         <option value="Islam">Islam</option>
                                         <option value="Kristen">Kristen</option>
                                         <option value="Budha">Budha</option>
                                         <option value="Protestan">Protestan</option>
                                    </select>
                                 </div>
                             </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Silahkan Pilih Jurusan</option>
                                            <option value="AK">AK</option>
                                            <option value="AP">AP</option>
                                            <option value="RPL">RPL</option>
                                            <option value="MM">MM</option>
                                            <option value="TKJ">TKJ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Kelas</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Silahkan Pilih Kelas</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nomor Hp</label>
                                        <input type="text" name="phone" id="" class="form-control" value="{{$user->students->first()->phone ?? 'Belum tersedia'}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="" id="" class="form-control" value="{{$user->name}}">
                                            <option value="">Silahkan Pilih Status</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non-Aktif">Non-Aktif</option>
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