<?php

use App\Images;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    private $numberOfImages = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Images table seeder notice'], [
            ['Edit this file to change the number of Images created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfImages . ' Images ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfImages);

        for ($i = 0; $i < $this->numberOfImages; ++$i) {
            factory(Images::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
