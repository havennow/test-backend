<?php

use Illuminate\Database\Seeder;
use App\Models\Character;
use Carbon\Carbon;

class CharactersSeeder extends Seeder
{

    /**
     * @throws Exception
     */
    public function run()
    {
        Character::insert([
            [
                'name' => 'Hulk',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Spiderman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Superman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
