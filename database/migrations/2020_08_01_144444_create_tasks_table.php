<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->biginteger('story_id')->unsigned();
            $table->foreign('story_id')->references('id')->on('stores')->onDelete('cascade');
            $table->biginteger('delegate_id')->unsigned();
            $table->foreign('delegate_id')->references('id')->on('users')->onDelete('cascade');
            $table->biginteger('day_id')->unsigned();
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
            $table->biginteger('week_id')->unsigned();
            $table->foreign('week_id')->references('id')->on('weeks')->onDelete('cascade');
            $table->text('disc');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
