<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Activity;
class ManagekegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = \App\Activity::all();
        return view('kegiatan.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function edit($id)
    {
       $kegiatan = Activity::findOrFail($id);

       return view('kegiatan.edit', compact('kegiatan'));
    }
    
  
    public function store()
    {
        $moment = Activity::create($this->validateRequest());

       $this->storeImage($moment);

       flash()->success('Data Kegiatan berhasil dihapus');
        return redirect(route('manage-kegiatan'));
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'nama_activity' => 'required',
            'idr' => 'required',
            'status' => 'required',
            'desc' => 'required',
            'jumlah_peserta' => 'required',
            'tgl_awal' => 'required',
            'tgl_selesai' => 'required',
            'image'       => 'required|mimes:jpeg,jpg,png|max:5000',
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
    public function destroy($id)
    {
        $kegiatan =  Activity::findOrFail($id);

        $kegiatan->delete();

        flash()->success('Data Kegiatan berhasil dihapus');
        return redirect(route('manage-kegiatan'));
    }
}
