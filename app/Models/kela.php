<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kela extends Model
{
    use HasFactory;
    public function siswa()
    {
        return $this->hasOne(siswa::class, 'kelasID', 'id');
    }
    public function guru()
    {
        return $this->hasOne(guru::class, 'kelasID', 'id');
    }
}
