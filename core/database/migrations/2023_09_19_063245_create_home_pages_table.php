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
        Schema::create('home_pages', function (Blueprint $t) {
            $t->id();
            $t->string('section_name');
            $t->string('title')->nullable();
            $t->longText('description')->nullable();
            $t->string('button_text')->nullable();
            $t->string('image')->nullable();
            $t->longText('more_content')->nullable();
            $t->text('more_button')->nullable();
            $t->string('video_link')->nullable();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_pages');
    }
};
