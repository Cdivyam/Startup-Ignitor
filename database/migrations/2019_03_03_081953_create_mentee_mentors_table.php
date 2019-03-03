<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenteeMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentee_mentors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mentor_id');
            $table->integer('mentee_id');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->boolean('MoUStatMentee');
            $table->boolean('MoUStatMentor');
            $table->string('MenterReview');
            $table->integer('MenterRating');
            $table->string('MenteeReview');
            $table->string('MenteeRating');
            $table->boolean('reqSent');
            $table->boolean('reqAccept');
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
        Schema::dropIfExists('mentee_mentors');
    }
}
