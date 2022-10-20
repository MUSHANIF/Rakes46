<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class siswa extends Model
{
    use HasFactory;

    public function getTglLahirAttribute($value)
    {
        return Carbon::parse($value)->translatedFormat('d F Y');
    }

    public function kela()
    {
        return $this->belongsTo(kela::class, 'kelasID', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }
}
