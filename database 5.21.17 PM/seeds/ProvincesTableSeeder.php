<?php

use App\Provinces;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    private $numberOfProvinces = 2;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Provinces table seeder notice'], [
            ['Edit this file to change the number of Provinces created'],
        ]);
        $Provinces_name=['بغداد','كربلاء'];
      
        $this->command->info('Creating ' . $this->numberOfProvinces . ' Provinces ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfProvinces);

        for ($i = 0; $i < $this->numberOfProvinces; ++$i) {
            DB::table('provinces')->insert([
                'name' =>$Provinces_name[$i],
                'country_id'=>1
            ]);
    
        }
        $bar->finish();
        $this->command->info('');
    }
}
