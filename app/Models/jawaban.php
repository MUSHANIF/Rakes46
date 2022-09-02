<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo(pertanyaan::class, 'pertanyaanID', 'id');
    }
}
