<?php

use App\Items;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    private $numberOfItems = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Items table seeder notice'], [
            ['Edit this file to change the number of Items created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfItems . ' Items ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfItems);

        for ($i = 0; $i < $this->numberOfItems; ++$i) {
            factory(Items::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
