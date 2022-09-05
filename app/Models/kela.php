<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kela extends Model
{
    use HasFactory;

    public function siswa()
    {
        return $this->hasMany(siswa::class, 'kelasID', 'id');
    }

    public function guru()
    {
        return $this->hasOne(guru::class, 'kelasID', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }
}
