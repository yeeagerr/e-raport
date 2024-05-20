<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableUser;
use Illuminate\Contracts\Auth\UserProvider;

class Siswa extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableUser;

    public $fillable = [
        'nisn',
        'nama',
        'kela_id',
        'username',
        'password',
    ];

    public $timestamps = false;

    public function kelas_siswa()
    {
        return $this->belongsTo(Kela::class, "kela_id", "id");
    }
}
