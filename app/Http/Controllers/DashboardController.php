<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jurusan;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        $jurusan = Jurusan::all();
        $siswa = Siswa::all();
        return view('dashboard.index', compact('user','jurusan',('siswa')));
    }
}
