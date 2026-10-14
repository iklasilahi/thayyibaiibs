<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('psb', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_ajaran');
            $table->date('tanggal_buka');
            $table->date('tanggal_tutup');
            $table->text('persyaratan');
            $table->text('prosedur')->nullable();
            $table->string('biaya')->nullable();
            $table->string('brosur')->nullable();
            $table->enum('status', ['buka', 'tutup', 'segera'])->default('buka');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('psb');
    }
};
