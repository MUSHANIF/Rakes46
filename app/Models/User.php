<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function siswa()
    {
        return $this->hasOne(siswa::class, 'userID', 'id');
    }

    public function kela()
    {
        return $this->hasOne(kela::class, 'userID', 'id');
    }

    public function ortu()
    {
        return $this->hasOne(ortu::class, 'userID', 'id');
    }

    public function jawaban()
    {
        return $this->hasOne(jawaban::class, 'userID', 'id');
    }

    // public function guru()
    // {
    //     return $this->hasOne(guru::class, 'userID', 'id');
    // }
}
