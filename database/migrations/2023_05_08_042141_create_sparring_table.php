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
        Schema::create('sparring', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('olahraga');
            $table->string('aksebilitas');
            $table->integer('tanggal');
            $table->string('lokasi');
            $table->string('biaya');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sparring');
    }
};
