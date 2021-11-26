<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    public function index()
    {
        $students = Role::with('users')->where('name', 'student')->latest()->paginate(6);

        return view('data.siswa.index', compact('students'));
    }

    public function create()
    {
        return view('data.siswa.create');
    }

    public function edit()
    {
        return view('data.siswa.edit');
    }
}