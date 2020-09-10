<?php

use Illuminate\Database\Seeder;
use App\Models\CharactersComic;
use Carbon\Carbon;

class CharactersComicsSeeder extends Seeder
{

    /**
     * @throws Exception
     */
    public function run()
    {
        CharactersComic::insert([
            [
                'characters_id' => 1,
                'comics_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'characters_id' => 2,
                'comics_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'characters_id' => 3,
                'comics_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
