<?php

use App\Brands;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    private $numberOfBrands = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function run()
    {
        $this->command->table(['Brands table seeder notice'], [
            ['Edit this file to change the number of Brands created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfBrands . ' Brands ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfBrands);

        for ($i = 0; $i < $this->numberOfBrands; ++$i) {
            factory(Brands::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
