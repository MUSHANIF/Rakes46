<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jawaban extends Model
{
    use HasFactory;

    public function scopeWhereTahunIni($query)
    {
        return $query->whereBetween('created_at', [Carbon::today()->startOfYear()->toDateTimeString(), Carbon::today()->endOfYear()->toDateTimeString()]);
    }

    public function scopeWhereCustomTanggal($query, array $dates)
    {
        if (!empty($dates)) return $query->whereBetween('created_at', [$dates[0], $dates[1]]); // diantara hari awal sampai hari akhir
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo(pertanyaan::class, 'pertanyaanID', 'id');
    }
}
