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
         Schema::create('user_insurances', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->unsignedInteger('user_id')->index('user_insurances_user_id_foreign');
             $table->string('SoBHXH', 200)->nullable();
             $table->string('ThgBHXH', 200)->nullable();
             $table->string('NmBHXH', 200)->nullable();
             $table->string('SotheBHXH', 200)->nullable();
             $table->string('MadkyKCB', 200)->nullable();
             $table->date('NbdTheYT')->nullable();
             $table->date('NktTheYT')->nullable();
             $table->string('TgiaBHTN', 200)->nullable();
             $table->string('ThgBdBHTN', 200)->nullable();
             $table->string('NBdBHTN', 200)->nullable();
             $table->string('PCKVBHXH', 200)->nullable();
             $table->string('QTrBHXH', 400)->nullable();
             $table->string('MSTtncn', 200)->nullable();
             $table->string('SoNgPgPt', 200)->nullable();
             $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
             $table->timestamp('created_at')->useCurrent()->nullable();
             $table->timestamp('updated_at')->useCurrent()->nullable();
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
