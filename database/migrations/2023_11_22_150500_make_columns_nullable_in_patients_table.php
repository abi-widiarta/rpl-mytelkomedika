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
        Schema::table('patients', function (Blueprint $table) {
            $table->string('name', 50)->nullable()->change();
            $table->string('no_hp', 13)->nullable()->change();
            $table->string('alamat', 50)->nullable()->change();
            $table->char('jenis_kelamin',1)->default("L")->change();
            $table->date('tanggal_lahir')->default("2000-01-01")->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('name', 50)->change();
            $table->string('no_hp', 13)->change();
            $table->string('alamat', 50)->change();
        });
    }
};
