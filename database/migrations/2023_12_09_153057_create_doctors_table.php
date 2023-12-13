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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('username',30)->unique();
            $table->string('password');
            $table->string('spesialisasi',25);
            $table->boolean('status')->default(true);
            $table->string('no_str',100)->unique();
            $table->string('no_hp',13);
            $table->char('jenis_kelamin',1);
            $table->date('tanggal_lahir');
            $table->string('alamat',100);
            $table->string('image');
            $table->float('rating')->default(0.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
