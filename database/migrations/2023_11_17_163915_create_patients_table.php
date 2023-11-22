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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('username',15);
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('password')->update();
            $table->string('nim',10);
            $table->string('no_hp',13);
            $table->string('alamat',50);
            $table->char('jenis_kelamin',1);
            $table->date('tanggal_lahir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
