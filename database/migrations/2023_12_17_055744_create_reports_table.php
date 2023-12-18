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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->integer('berat_badan')->length(3);
            $table->integer('tinggi_badan')->length(3);
            $table->float('suhu_badan');
            $table->text('keluhan');
            $table->text('diagnosa');
            $table->text('anjuran');
            $table->text('obat');
            $table->tinyInteger('surat_dokter');
            $table->timestamps();

            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
