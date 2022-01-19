<?php

namespace App\Http\Controllers\Report;

use PDF;
use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('awal')) {
            $activitys = Activity::whereBetWeen('tgl_awal', [request('awal'), request('akhir')])->get();
        }
        $pdf = PDF::loadView('cetak.activity', compact('activitys'))->setPaper('a4','landscape');

        return $pdf->stream('laporan_activity.pdf');
    }

    public function edit(Request $request)
    {
         
        $kegiatans = Activity::all();
        $pdf = PDF::loadView('cetak.all.activity', compact('kegiatans'))->setPaper('a4','landscape');

        return $pdf->stream('laporan_activity.pdf');
    }
}