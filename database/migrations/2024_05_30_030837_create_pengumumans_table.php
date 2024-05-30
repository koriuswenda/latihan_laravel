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

            $table->string('judul_pengumuman')->nullable(); // Rapat Pemuda Wilayah
            $table->string('slug')->nullable(); // Rapat-Pemuda-Wilayah

            $table->varchar('nama_penulis')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
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
        Schema::dropIfExists('pengumumans');
    }
};
