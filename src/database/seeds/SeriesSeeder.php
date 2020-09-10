<?php

use Illuminate\Database\Seeder;
use App\Models\Serie;
use Carbon\Carbon;

class SeriesSeeder extends Seeder
{

    /**
     * @throws Exception
     */
    public function run()
    {
        Serie::insert([
            [
                'name' => 'Serie Teste 1',
                'stories_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Serie Teste 2',
                'stories_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Serie Teste 3',
                'stories_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
