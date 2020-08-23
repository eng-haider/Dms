<?php

use App\Users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    private $numberOfUsers = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    
    {

        DB::table('users')->insert([
            'name' => Str::random(10),
            
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
        // $this->command->table(['Users table seeder notice'], [
        //     ['Edit this file to change the number of Users created'],
        // ]);

        // $this->command->info('Creating ' . $this->numberOfUsers . ' Users ...');
        // $bar = $this->command->getOutput()->createProgressBar($this->numberOfUsers);

        // for ($i = 0; $i < $this->numberOfUsers; ++$i) {
        //     factory(Users::class)->create();
        //     $bar->advance();
        // }

        // $bar->finish();
        // $this->command->info('');
    }
}
