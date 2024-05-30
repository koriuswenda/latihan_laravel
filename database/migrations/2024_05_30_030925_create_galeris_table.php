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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('gereja_id')->nullable();

            $table->string('judul_galeri')->nullable(); // dalam rangkah rapat pemuda wilayah
            $table->string('slug')->nullable(); // dalam-rangkah-rapat-pemuda-wilayah

            $table->mediumText('detail_galeri')->nullable();
            $table->time('waktu')->nullabletable();
            $table->mediumText('keterangan')->nullable();
            $table->text('foto')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
