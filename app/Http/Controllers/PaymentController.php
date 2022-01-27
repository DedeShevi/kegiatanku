<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Register;
use App\Payment;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create($id)
    {
        $pembayaran = Register::findOrFail($id);

        return view('verifikasi.pendaftaran.pembayaran', compact('pembayaran'));
    }

    public function store()
    {

        $verifikasi = Payment::create($this->validateRequest());

        $this->storeImage($verifikasi);

        if ($verifikasi->save()) {
            $get = Register::findOrFail($verifikasi->register_id);

            $activity = Activity::findOrFail($get->activity_id);
            
            $hitung = $activity->jumlah_peserta - $get->qty;
            $get->update ([
                'status'  => 'terverifikasi'
            ]);
            $activity->update ([
                'jumlah_peserta' => $hitung
            ]);
        }

        return redirect()->back();
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'register_id' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'required|mimes:jpeg,jpg,png|max:5000',
                ]);

            }
        });
    }
    private function storeImage($moment){
        if (request()->has('image')){
            $moment->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $moment->image))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }
}