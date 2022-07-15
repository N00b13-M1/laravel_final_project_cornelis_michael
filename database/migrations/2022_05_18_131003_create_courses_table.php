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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->string('bg');
            $table->string('teacher_pic');
            $table->string('bg_2');
            $table->string('bg_3');
            $table->string('bg_4');
            // $table->string('teacher_name');
            $table->foreignId('user_id')->constrained('users', "id")->onDelete('cascade');
            $table->string('price_class');
            $table->string('price');
            $table->text('text');
            $table->date('starting_date');
            $table->integer('months');
            $table->integer('weeks');
            $table->string('study_level');
            $table->string('discipline');
            $table->string('favorite')->default("No");
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('courses');
    }
};
