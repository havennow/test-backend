<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CharactersSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(StorySeeder::class);
        $this->call(SeriesSeeder::class);
        $this->call(ComicsSeeder::class);
        $this->call(CharactersComicsSeeder::class);
    }
}
