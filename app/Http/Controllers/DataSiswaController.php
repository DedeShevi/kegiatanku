<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $students = Role::with('users')
                            ->where('name', 'student')
                            ->latest()
                            ->paginate(6);
        return view('data.siswa.index', compact('students'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('data.siswa.create', compact('roles'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
       
        ]);

        $request->merge(['password' => bcrypt($request->get('password'))]);

        if ($user = User::create($request->except('roles'))) {
            $user->syncRoles($request->get('roles'));
            if ($user->save()) {
                $siswa = Student::create([
                    'user_id'   => $user->id,
                    'nisn'      => $request->nisn,
                    'gender'    => $request->gender,
                    'religion'  => $request->religion,
                    'major'     => $request->major,
                    'class'     => $request->class,
                    'phone'     => $request->phone,
                    'status'    => $request->status,
                    
                ]);
            };
            flash()->success('Anggota baru berhasil di tambahkan');
        } else {
            flash()->error('tidak dapat menambahkan pengguna baru');
        }
        
        return redirect()->back();
    }

    public function edit($id)
    {
        $array =[
            'user' => User::FindOrFail($id),
            'role' => Role::pluck('name','id'),
        ];

    return view('data.siswa.edit', $array);
    }
}