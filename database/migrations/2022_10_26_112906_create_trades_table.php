<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('trading_id')->unsigned();
            $table->date('date');
            $table->string('instument')->nullable();
            $table->string('script')->nullable();
            $table->string('buy_sell')->nullable();
            $table->string('stratergy')->nullable();
            $table->string('market_condition')->nullable();

            $table->string('trade_type')->nullable();
            
            $table->double('average_entry_price')->nullable();
            $table->date('entry_time')->nullable();
            $table->double('average_exit_price')->nullable();
            $table->date('exit_time')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('capital_traded')->nullable();
            $table->double('returns')->nullable();
            $table->double('roi')->nullable();
            $table->string('entry_reason')->nullable();
            $table->string('exit_reason')->nullable();
            $table->string('trade_result')->nullable();
            $table->string('trade_screenshot')->nullable();
            $table->text('trade_pros')->nullable();
            $table->text('trade_cons')->nullable();
            $table->integer('trading_rating')->nullable();
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
        Schema::dropIfExists('trades');
    }
}
