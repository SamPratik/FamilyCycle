<?php

use Illuminate\Database\Seeder;

class AfterBirthPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AfterBirthPost::class, 25)->create();
    }
}
