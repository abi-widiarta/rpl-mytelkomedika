<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
            "name",
            "email",
            "username",
            "password",
            "spesialisasi",
            "status",
            "no_str",
            "no_hp",
            "jenis_kelamin",
            "tanggal_lahir",
            "alamat",
            "image",
    ];

    public function doctor_schedule(): HasMany
    {
        return $this->hasMany(DoctorSchedule::class);
    }
}
