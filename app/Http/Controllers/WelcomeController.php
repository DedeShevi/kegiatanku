<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = [
            'kegiatans' => Activity::paginate(3),
            'activitys' => Activity::all(),
        ];
        return view('index', $data);
    }
}