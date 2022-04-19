<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatefilemanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filemanagers', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->integer('parent_id')->unsigned()->default(0);
            $table->integer('order')->default(0);
            $table->string('class')->nullable();
            $table->string('type')->nullable();
            $table->string('ext')->nullable();
            $table->string('url')->nullable();
            $table->integer('size')->nullable();
            $table->boolean('favourite')->default(false);
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('filemanagers');
    }
}
