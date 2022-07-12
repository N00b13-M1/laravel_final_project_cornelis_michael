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
        Schema::create('news_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained("news", "id")->onDelete('cascade');
            $table->foreignId('tag_id')->constrained("tags", "id")->onDelete('cascade');
            // $table->integer('news_id')->unsigned();
            // $table->foreignId('news_id')->references("id")->on('news');
            // $table->integer('tag_id')->unsigned();
            // $table->foreignId('tag_id')->references("id")->on('tags');
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
        Schema::dropIfExists('news_tags');
    }
};

