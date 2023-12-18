<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function schedule_time(): BelongsToMany
    {
        return $this->belongsToMany(ScheduleTime::class, 'doctor_schedules', 'doctor_id','schedule_time_id')->withPivot('hari', 'tanggal_berlaku_sampai', 'kapasitas_pasien');
    }

    public function patients(): BelongsToMany
    {
        return $this->belongsToMany(Patient::class, 'reservations', 'doctor_id', 'patient_id');
    }

    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
