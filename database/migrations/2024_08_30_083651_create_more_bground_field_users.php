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
        Schema::table('users', function (Blueprint $table) {
            $table->string('CdanhHD', 200)->nullable();
            $table->string('TENDV', 200)->nullable();
            $table->string('SoSLDCMND', 200)->nullable();
            $table->string('NgayCMND', 200)->nullable();
            $table->string('NoiCMND', 200)->nullable();
            $table->string('Noisinh', 200)->nullable();
            $table->string('QUEQUAN', 200)->nullable();
            $table->string('Xuatthan', 200)->nullable();
            $table->string('PhanLoaiNV', 200)->nullable();
            $table->string('QTCT', 400)->nullable();
            $table->string('MoiQH', 200)->nullable();
            $table->string('Hotencha', 200)->nullable();
            $table->string('Hotenme', 200)->nullable();
            $table->string('HotenVC', 200)->nullable();
            $table->string('SoCon', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('more_bground_field_users');
    }
};
