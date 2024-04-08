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
            $table->string('key');
            $table->string('site_name')->nullable();
            $table->string('email')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_site_name')->nullable();
            $table->string('og_updated_time')->nullable();
            $table->string('og_image')->nullable();
            $table->string('article_published_time')->nullable();
            $table->string('article_modified_time')->nullable();
            $table->string('twitter_card')->nullable();
            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('favicon')->nullable();
            $table->string('site_logo')->nullable();
            $table->timestamps();
        });
        \Illuminate\Support\Facades\DB::table('global_seos')->insert(['key' => 'global']);
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
