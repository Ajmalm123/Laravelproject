<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersses', function (Blueprint $table) {
            $table->id();
            $table->string('name',length:50);
            $table->string('department_name',length:50);
            $table->string('designation_name',length:50);
            $table->string('phone')->nullable()->unique();
            $table->timestamp('created_at');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersses');
    }
};
