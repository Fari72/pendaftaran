<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Jurusan;
use App\Models\Siswa;
use App\Models\User;
use Validator;
use Str;
class RegisterController extends Controller

{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $users = new User;
       $users->nama = $request->nama;
       $users->email = $request->email; 
       $users->password = bcrypt('password');
       $users->remember_token = Str::random(20); 
       $users->roles_id = 2;
       $users->status = 'inactive';
       $users->save();

       $validator = Validator::make($request->all(),[
        'nama'=>'required',
        'jurusan_id'=>'required',
       ]);

       //membuat tabel siswa
       $request->request->add(['user_id'=>$users->$id]);
       $siswa = Siswa::create([
        'nama'=>$request->nama,
        'jurusan_id'=>$request->jurusan_id,
       ]);

       $request->request->add(['user_id' => $users->id]);

       if($validator->fails()){
        return response()->json($validator->errors(), 422);
       }

       return response()->json([
        'success' => true,
        'message' => 'Data Berhasil Disimpan',
        'data' => $siswa,
       ]);
    }
}
