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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name',100);
            $table->string('blog_title',100);
            $table->text('blog_description');
            $table->string('slug',100);
            $table->integer('status')->comment('0-inactive,1-active');
            $table->unsignedBigInteger('blog_type');
            $table->unsignedBigInteger('created_by');
            $table->foreign('blog_type')->references('id')->on('blog_types')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
    }
};
