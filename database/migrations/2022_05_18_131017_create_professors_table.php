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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->string('professor_photo');
            $table->string('professor_name');
            $table->string('professor_title');
            $table->string('url');
            $table->text('text1');
            $table->string('textstrong');
            $table->text('text2');
            $table->string('phone');
            $table->string('email');
            $table->string('skype_id');
            $table->string('facebook_id');
            $table->string('twitter_id');
            $table->string('dribble_id');
            $table->string('linkedin_id');
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
        Schema::dropIfExists('professors');
    }
};

