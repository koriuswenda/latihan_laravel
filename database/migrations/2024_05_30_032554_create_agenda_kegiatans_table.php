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
        Schema::create('agenda_kegiatans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('gereja_id')->nullable();

            $table->string('judul_agenda_kegiatan')->nullable(); // dalam rangkah rapat pemuda wilayah
            $table->string('slug')->nullable(); // dalam-rangkah-rapat-pemuda-wilayah

            $table->mediumText('nama_penulis')->nullable();
            $table->longText('isi')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('waktu')->nullable();

            $table->mediumText('keterangan')->nullable();
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
        Schema::dropIfExists('agenda_kegiatans');
    }
};
