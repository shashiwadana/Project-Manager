<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('days')->unsigned()->nullable();
            $table->string('hours')->unsigned()->nullable();
            $table->integer('company_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('company_id')->references('id')->on('companies');
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
