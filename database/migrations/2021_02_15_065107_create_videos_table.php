<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatevideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {

            $table->id();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('feature_video')->nullable();
            $table->tinyInteger('notice_published')->default(0);
            $table->integer('order')->default(0);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('videos');
    }
}
