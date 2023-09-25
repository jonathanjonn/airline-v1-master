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
        Schema::create('penerbangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bandara_asal_id')->constrained('bandara');
            $table->foreignId('bandara_tujuan_id')->constrained('bandara');
            $table->dateTime('waktu_berangkat');
            $table->dateTime('waktu_sampai');
            $table->text('maskapai');
            $table->text('tipe_pesawat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerbangan');
    }
};
