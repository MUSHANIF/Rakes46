<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    public function guru() {
        return $this->belongsTo(kela::class, 'kelasID', 'id');
        }

}
