<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    // public function guru()
    // {
    //     return $this->belongsTo(kela::class, 'kelasID', 'id');
    // }

    public function kela()
    {
        return $this->belongsTo(kela::class, 'kelasID', 'id');
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'userID', 'id');
    // }
}
