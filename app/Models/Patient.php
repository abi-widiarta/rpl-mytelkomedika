<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'username',
            'name',
            'email',
            'password',
            'nim',
            'no_hp',
            'alamat',
            'jenis_kelamin',
            'tanggal_lahir'
    ];
}
