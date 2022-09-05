<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    public function kelas()
    {
        return $this->belongsTo(kela::class, 'kelasID', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }

    // public function siswa()
    // {
    //     return $this->hasOne(kela::class, 'kelasID', 'id');
    // }
}
