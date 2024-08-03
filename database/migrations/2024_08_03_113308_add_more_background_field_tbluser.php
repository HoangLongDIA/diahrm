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
            $table->string('religion', 50)->nullable();
            $table->string('tempAddress', 200)->nullable();
            $table->string('background',200)->nullable();
            $table->string('educationLevel', 200)->nullable();
            $table->string('primaryJob', 200)->nullable();
            $table->boolean('unionMember')->nullable();
            $table->boolean('dangvien')->nullable();
            $table->boolean('cuucb')->nullable();
            $table->boolean('dqtv')->nullable();
            $table->boolean('pccs')->nullable();


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
