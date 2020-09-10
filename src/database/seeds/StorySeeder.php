<?php

use Illuminate\Database\Seeder;
use App\Models\Story;
use Carbon\Carbon;

class StorySeeder extends Seeder
{

    /**
     * @throws Exception
     */
    public function run()
    {
        Story::insert([
            [
                'name' => 'Story Teste 1',
                'events_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Story Teste 2',
                'events_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Story Teste 3',
                'events_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
