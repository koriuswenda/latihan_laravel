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
        Schema::create('gerejas', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('wilayah_id')->nullable();

            $table->string('nama_gereja')->nullable(); // Gereja Baptis Waena
            $table->string('slug')->nullable(); // gereja-baptis-waena

            $table->mediumText('kode_gereja')->nullable();
            $table->mediumText('nama_wilayah')->nullable();
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
        Schema::dropIfExists('gerejas');
    }
};
