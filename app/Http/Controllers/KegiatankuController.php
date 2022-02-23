<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatankuController extends Controller
{
    public function index()
    {
        $myActivitys = Register::where(['status' => 'peserta'], ['user_id' => Auth::user()->id])->get();

        return view('kegiatan.siswa.index', compact('myActivitys'));
    }
}
