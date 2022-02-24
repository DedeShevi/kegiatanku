<?php

namespace App\Http\Controllers\Pendaftaran;

use PDF;
use App\Activity;
use Illuminate\Support\Facades\Auth;
use App\Register;
use \Milon\Barcode\DNS1D;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifiedController extends Controller
{
    public function index()
    {
        $verifieds = Register::where(['user_id' => Auth::user()->id,'status' => 'terverifikasi'])->paginate(6);
        return view('verifikasi.verified.index', compact('verifieds'));
    }
    public function sertifikat($id)
    {
        // $code = DNS1D::getBarcodeSVG('4445645656', 'PHARMA2T');
        // dd($code);
    
    $sertifikat = Register::findOrFail($id);
        $pdf = PDF::loadView('cetak.sertifikat', compact('sertifikat'))->setPaper('a4', 'landscape');

        return $pdf->stream('sertifikat.pdf');

    }
}
