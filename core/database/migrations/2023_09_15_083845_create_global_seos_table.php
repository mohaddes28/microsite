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
        Schema::create('global_seos', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('title');
            $table->text('description');
            $table->text('keywords');
            $table->string('og_title');
            $table->text('og_description');
            $table->string('og_site_name');
            $table->string('og_updated_time');
            $table->string('og_image');
            $table->string('article_published_time');
            $table->string('article_modified_time');
            $table->string('twitter_card');
            $table->string('twitter_title');
            $table->text('twitter_description');
            $table->string('twitter_image');
            $table->string('favicon');
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
        Schema::dropIfExists('global_seos');
    }
};
