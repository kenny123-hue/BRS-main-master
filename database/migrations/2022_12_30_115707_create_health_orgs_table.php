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
        Schema::create('health_orgs', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->bigInteger('service_number')->unique();
            $table->string('org_type')->nullable();
            $table->string('phone'); 
            $table->string('county');
            $table->string('sub_county');
            $table->string('f_description');
            $table->string('location');
            $table->string('cor');
            $table->string('category');
            $table->string('aname'); 
            $table->string('aphone'); 
            $table->string('aID');
            $table->string('kra'); 
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
        Schema::dropIfExists('health_orgs');
    }
};
