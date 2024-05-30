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
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('gereja_id')->nullable();

            $table->string('judul_pengumuman')->nullable(); // dalam rangkah rapat pemuda wilayah
            $table->string('slug')->nullable(); // dalam-rangkah-rapat-pemuda-wilayah

            $table->mediumText('nama_penulis')->nullable();
            $table->date('tanggal_mulai')->nullabletable();
            $table->date('tanggal_selesai')->nullabletable();
            $table->time('waktu')->nullabletable();
            $table->mediumText('keterangan')->nullable();
            $table->text('profil')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumumans');
    }
};
