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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('article_name');
            $table->text('article_title')->nullable();
            $table->text('article_description')->nullable();
            $table->text('article_image')->nullable();
            $table->text('order')->nullable();
            $table->integer('created_by');
            $table->integer('status')->default(1)->comment('0 - inactive,1 - active');
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
        Schema::dropIfExists('articles');
    }
};
