<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        "doctor_id",
        "hari",
        "jam_mulai",
        "jam_selesai",
        "tanggal_berlaku_sampai",
];

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
