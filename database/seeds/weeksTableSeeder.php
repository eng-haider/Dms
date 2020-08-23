<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class weeksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weeks')->insert([
            'name' => 'الاول',
        ]);

        DB::table('weeks')->insert([
            'name' => 'الثاني',
        ]);

        DB::table('weeks')->insert([
            'name' => 'الثالث',
        ]);

        DB::table('weeks')->insert([
            'name' => 'الرابع',
        ]);
    }
}
