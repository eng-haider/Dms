<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksQuestionsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_questions_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('reports_id')->unsigned();
            $table->foreign('reports_id')->references('id')->on('reports')->onDelete('cascade');
            $table->biginteger('task_questions_id')->unsigned();
            $table->foreign('task_questions_id')->references('id')->on('tasks_questions')->onDelete('cascade');
            $table->biginteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->text('disc')->nullable();
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
        Schema::dropIfExists('tasks_questions_answers');
    }
}
