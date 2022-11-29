<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jurusan;
use Auth;
use Str;
use Validator;
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        //dd($request->all());
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        $request->session()->regenerate();
        if(Auth::attempt($credentials)){
            if(Auth::users()->roles_id == 1){
                return redirect('/dashboard');
            }
            if(Auth::users()->roles_id == 2){
                return redirect('/siswa');
            }
        }
        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
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

       return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
