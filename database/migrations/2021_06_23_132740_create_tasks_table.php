<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatetasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('priority', ['low','medium','high'])->default('low');
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('progress')->default(0);
            $table->enum('status', ['planning','wip','completed'])->default('planning');
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
        Schema::dropIfExists('tasks');
    }
}
