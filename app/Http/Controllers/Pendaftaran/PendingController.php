<?php

namespace App\Http\Controllers\Pendaftaran;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Register;

class PendingController extends Controller
{
    public function index()
    {
        $pendings = Register::where(['user_id' => Auth::user()->id,'status' => 'pending'])->paginate(6);
        return view('verifikasi.pending.index', compact('pendings'));
    }
}