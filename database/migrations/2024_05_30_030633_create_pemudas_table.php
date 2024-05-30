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
        Schema::create('pemudas', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('gereja_id')->nullable();

            $table->string('nama_pemuda')->nullable(); // Gereja Baptis Waena
            $table->string('slug')->nullable(); // gereja-baptis-waena

            $table->mediumText('jenis_kelamin')->nullable();
            $table->text('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->date('no_hp')->nullable();
            $table->date('usia')->nullable();
            $table->text('alamat')->nullable();
            $table->mediumText('gereja')->nullable();
            $table->text('wilayah')->nullable();
            $table->mediumText('status')->nullable();

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
        Schema::dropIfExists('pemudas');
    }
};
