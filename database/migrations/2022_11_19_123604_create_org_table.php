<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org', function (Blueprint $table) {
            $table->id();
            $table->string('org_name');
            $table->string('email')->unique();
            $table->bigInteger('service_number')->unique();
            $table->string('org_type')->nullable();
            $table->bigInteger('phone'); 
            $table->string('county');
            $table->string('sub county');
            $table->string('location');   
            $table->string('password');
            $table->rememberToken()->nullable();           
            $table->timestamps();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('org');
    }
};
