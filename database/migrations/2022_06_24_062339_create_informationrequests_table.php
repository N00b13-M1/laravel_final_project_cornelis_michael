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
        Schema::create('informationrequests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('campus');
            $table->string('program');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('professor_email')->nullable();
            $table->foreignId("user_id")->constrained("users", "id")->OnDelete('cascade');

            //NEW
            $table->foreignId("professor_id")->constrained("professors", "id")->OnDelete('cascade');

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
        Schema::dropIfExists('informationrequests');
    }
};
