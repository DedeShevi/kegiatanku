@component('mail::message')

<p>Hallo, {{$register->user->name}}</p>
<p>Terimakasih telah melakukan pendaftaran dalam kegiatan kami.
    Silahkan buka link ini untuk melakukan upload buku pembayaran anda
    dengan kode pembayaran
</p>
<p> Kode pendaftaran : {{$register->activity->kode_activity}}</p>
@component('mail::button', ['url' => "http://localhost/kegiatanku/public/user/ambil-form/{$register->id}"])
    Upload pembayaran
@endcomponent 
@endcomponent