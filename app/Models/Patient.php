<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Patient extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;
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

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class, 'reservations', 'patient_id','doctor_id');
    }
}
