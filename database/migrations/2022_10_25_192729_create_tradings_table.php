<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetradingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradings', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->date('date');
            $table->double('p_open')->nullable();
            $table->double('p_close')->nullable();
            $table->double('c_open')->nullable();
            $table->double('c_close')->nullable();
            $table->double('t_pnl')->nullable();
            $table->double('t_charges')->nullable();
            $table->double('n_pnl')->nullable();
            $table->text('mistakes')->nullable();
            $table->text('learning')->nullable();
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('tradings');
    }
}
