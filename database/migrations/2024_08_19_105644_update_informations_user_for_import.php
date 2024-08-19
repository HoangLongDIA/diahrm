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
        //
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('manv', 200)->nullable();
            $table->string('trdohv', 200)->nullable();
            $table->string('ngnghiep', 200)->nullable();
            $table->string('sotruong', 200)->nullable();
            $table->string('dtpccc', 200)->nullable();
            $table->string('chuyenco', 200)->nullable();
            $table->string('ttxep', 200)->nullable();
            $table->string('pkhoild', 200)->nullable();
            $table->string('qh2126', 200)->nullable();
            $table->string('ctcuucb', 200)->nullable();
            $table->string('cttuve', 200)->nullable();
            $table->string('ctdangvien', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
