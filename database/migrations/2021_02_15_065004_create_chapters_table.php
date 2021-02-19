<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatechaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('feature_image')->nullable();
            $table->text('feature_video')->nullable();
            $table->text('content')->nullable();
            $table->boolean('free')->default(0);
            $table->float('price')->default(0)->nullable();
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
        Schema::dropIfExists('chapters');
    }
}
