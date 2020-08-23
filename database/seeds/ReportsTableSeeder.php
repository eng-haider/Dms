<?php

use App\Reports;
use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    private $numberOfReports = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Reports table seeder notice'], [
            ['Edit this file to change the number of Reports created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfReports . ' Reports ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfReports);

        for ($i = 0; $i < $this->numberOfReports; ++$i) {
            factory(Reports::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
