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
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->text('NamaArsip');
            $table->text('KodeArsip') -> unique();
            $table->text('Perihal');
            $table->text('Kategori');
            $table->text('LokasiArsip');
            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsips');
    }
};
