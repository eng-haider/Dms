<?php

use App\TasksQuestionsAnswers;
use Illuminate\Database\Seeder;

class TasksQuestionsAnswersTableSeeder extends Seeder
{
    private $numberOfTasksQuestionsAnswers = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['TasksQuestionsAnswers table seeder notice'], [
            ['Edit this file to change the number of TasksQuestionsAnswers created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfTasksQuestionsAnswers . ' TasksQuestionsAnswers ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfTasksQuestionsAnswers);

        for ($i = 0; $i < $this->numberOfTasksQuestionsAnswers; ++$i) {
            factory(TasksQuestionsAnswers::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
