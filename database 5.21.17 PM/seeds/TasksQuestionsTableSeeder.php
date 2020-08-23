<?php

use App\TasksQuestions;
use Illuminate\Database\Seeder;

class TasksQuestionsTableSeeder extends Seeder
{
    private $numberOfTasksQuestions = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['TasksQuestions table seeder notice'], [
            ['Edit this file to change the number of TasksQuestions created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfTasksQuestions . ' TasksQuestions ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfTasksQuestions);

        for ($i = 0; $i < $this->numberOfTasksQuestions; ++$i) {
            factory(TasksQuestions::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
