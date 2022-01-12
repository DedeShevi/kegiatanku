<?php

namespace App\Http\Controllers\Pendaftaran;

use Illuminate\Support\Facades\Auth;
use App\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifiedController extends Controller
{
    public function index()
    {
        $verifieds = Register::where(['user_id' => Auth::user()->id,'status' => 'terverifikasi'])->paginate(6);
        return view('verifikasi.verified.index', compact('verifieds'));
    }
}
