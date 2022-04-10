<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->text('requirement')->nullable();
            $table->text('description')->nullable();
            $table->text('message')->nullable();
            $table->integer('duration')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('rate')->nullable();
            $table->enum('price_type', ['hourly','daily','fix'])->default('fix');
            $table->enum('payment', ['advance','pending','completed'])->default('pending');
            $table->enum('priority', ['high','medium','low'])->default('medium');
            $table->integer('completion_status')->default(0);
            $table->enum('status', ['planning','started','wip','completed'])->default('planning');
            $table->text('notes')->nullable()->nullable();
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
        Schema::dropIfExists('projects');
    }
}
