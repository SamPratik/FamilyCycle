<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AfterBirthPostsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AbCommentsSeeder::class);
    }
}
