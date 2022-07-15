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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->integer('stars');
            $table->integer('likes');
            $table->string('where');
            $table->string('when');
            $table->string('circle_txt');
            $table->string('event_name');
            $table->string('event_desc');
            $table->boolean('status')->default(false);
            $table->foreignId('user_id')->constrained("users", "id")->onDelete("cascade");
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
        Schema::dropIfExists('events');
    }
};


