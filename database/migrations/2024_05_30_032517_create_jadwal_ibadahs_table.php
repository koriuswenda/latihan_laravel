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
        Schema::create('jadwal_ibadahs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('gereja_id')->nullable();

            $table->string('tempat_gereja')->nullable(); // gereja baptis pengharapan waena
            $table->string('slug')->nullable(); // gereja-baptis-pengharapan-waena

            $table->mediumText('kode_gereja')->nullable();
            $table->mediumText('kode_wilayah')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('waktu')->nullable();
            $table->text('keterangan')->nullable();
            $table->text('file')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_ibadahs');
    }
};
