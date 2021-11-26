<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class DaftarUlangController extends Controller
{
    public function index()
    {
        $registers = Register::with('user', 'activity')
                                ->where('status','terverifikasi')
                                ->latest()
                                ->paginate(5);
        return view('verifikasi.pendaftaran.index', compact('registers'));
    }

}