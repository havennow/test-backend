<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;
use Carbon\Carbon;

class ComicsSeeder extends Seeder
{

    /**
     * @throws Exception
     */
    public function run()
    {
        Comic::insert([
            [
                'name' => 'Comic Teste 1',
                'series_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Comic Teste 2',
                'series_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Comic Teste 3',
                'series_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
