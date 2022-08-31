<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    use HasFactory;

    protected $casts = [
        'jawaban' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }
}
