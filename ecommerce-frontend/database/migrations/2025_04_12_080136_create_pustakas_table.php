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
        Schema::create('pustaka', function (Blueprint $table) {
            $table->id('id_pustaka');
            $table->string('nama_pustaka');
            $table->integer('stok_pustaka');
            $table->text('deskripsi_pustaka');
            $table->string('gambar_pustaka')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pustakas');
    }
};
