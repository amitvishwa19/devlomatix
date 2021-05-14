<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatequizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('feature_image')->nullable();
            $table->tinyInteger('notice_published')->default(0);
            $table->tinyInteger('result_published')->default(0);
            $table->date('start_date')->default(Carbon::now());
            $table->date('end_date')->default(Carbon::now());
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
        Schema::dropIfExists('quizzes');
    }
}
