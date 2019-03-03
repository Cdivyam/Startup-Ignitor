<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mentor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('u_id');
            $table->string('position');
            $table->string('preferred_stage');
            $table->string('city');
            $table->string('state');
            $table->bigInteger('phone');
            $table->text('address');
            $table->text('description');
            $table->string('ministry');
            $table->string('department');
            $table->string('industry');
            $table->string('sector');
            $table->string('image');
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
        Schema::dropIfExists('mentor');
       
    }
}
