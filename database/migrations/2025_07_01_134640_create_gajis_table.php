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
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gaji_IdKaryawan')->constrained(
                table: 'karyawans', indexName: 'gaji_IdKaryawan');
            $table->integer('gajiPokok');
            $table->integer('bonus');
            $table->string('pph');
            $table->integer('nominalPPH');
            $table->integer('gajiBersih');
            $table->string('periodeGaji');
            $table->foreignId('gaji_IdStatus')->constrained(
                table: 'statuses', indexName: 'gaji_IdStatus');
            $table->string('tanggalDibayar')->nullable();
            $table->string('buktiTransfer')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gajis');
    }
};
