<?php

use App\Stores;
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    private $numberOfStores = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Stores table seeder notice'], [
            ['Edit this file to change the number of Stores created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfStores . ' Stores ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfStores);

        for ($i = 0; $i < $this->numberOfStores; ++$i) {
            factory(Stores::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
