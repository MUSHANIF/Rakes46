<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    use HasFactory;
    public function pertanyaan(){
        return $this->belongsTo(pertanyaan::class, 'id_pertanyaan', 'id');
    }
}
