<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $registers = Register::with('user','activity')
                                ->where('status','peserta')
                                ->latest()
                                ->paginate(5);
        return view('verifikasi.peserta.index', compact('registers'));
    }

    public function store(Request $request, $id)
    {
        $register = Register::findOrFail($id);

        $register->update([
            'status' => 'peserta'
        ]);

        return redirect()->back();
    }
}