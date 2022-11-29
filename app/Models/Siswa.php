<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusan;
use App\Models\Auth;
class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    
    protected $guarded = [];

    protected $fillabel = ['users_id','nama','jurusan_id'];

    public function Jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function Auth(){
        return $this->hasMany(Auth::class);
    }
}
