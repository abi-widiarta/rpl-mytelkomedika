<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained(); // Foreign key ke tabel dokter
            $table->foreignId('schedule_time_id')->constrained(); // Foreign key ke tabel dokter
            $table->string('hari');
            $table->integer('kapasitas_pasien')->default(30);
            $table->date('tanggal_berlaku_sampai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_schedules');
    }
};