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
        Schema::create('wilayahs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sinode_id')->nullable();

            $table->string('nama_wilayah')->nullable(); // wilyah jayapura keerom dan yahukimo
            $table->string('slug')->nullable(); // wilayah-jayapura-keerom-yahukimo

            $table->mediumText('kode_wilayah')->nullable();
            $table->mediumText('alamat')->nullable();
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
        Schema::dropIfExists('wilayahs');
    }
};
