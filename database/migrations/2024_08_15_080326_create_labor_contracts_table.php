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
        Schema::create('labor_contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->index('user_labor_contracts_user_id_foreign');
            $table->unsignedInteger('add_id')->index('user_add_labor_contracts_user_id_foreign');
            $table->string('MAHDLD', 200)->nullable();
            $table->string('HTLD', 200)->nullable();
            $table->string('DVSDLD', 200)->nullable();
            $table->string('NguoiDD', 200)->nullable();
            $table->date('NgayBDHD')->nullable();
            $table->date('NgayHHHD')->nullable();
            $table->date('Ngaynhan')->nullable();
            $table->string('MaNgach', 200)->nullable();
            $table->string('NgachL', 200)->nullable();
            $table->string('BacL', 200)->nullable();
            $table->string('HesoL', 200)->nullable();
            $table->date('TGtinhL')->nullable();
            $table->string('MucL', 200)->nullable();
            $table->string('HeSoPCCV', 200)->nullable();
            $table->string('MucPCCV', 200)->nullable();
            $table->string('HeSoPCKV', 200)->nullable();
            $table->string('HeSoPCTN', 200)->nullable();
            $table->string('HeSoPCDH', 200)->nullable();
            $table->string('Ghichu', 200)->nullable();
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['add_id'])->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labor_contracts');
    }
};
