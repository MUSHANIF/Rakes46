<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    use HasFactory;
    public function jawaban(){
        return $this->hasOne(jawaban::class, 'id_pertanyaan', 'id'  );
    }
}
