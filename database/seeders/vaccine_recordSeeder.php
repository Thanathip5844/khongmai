<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class vaccine_recordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine_record')->insert([
            [
                'std_id' => 1,
                'vac_id' => 4,
                'vaccined_date' =>'2024-12-11',
            ],
            [
                'std_id' => 2,
                'vac_id' => 3,
                'vaccined_date' =>'2024-12-11',
            ],
            [
                'std_id' => 3,
                'vac_id' => 2,
                'vaccined_date' =>'2024-12-11',
            ],
            [
                'std_id' => 4,
                'vac_id' => 1,
                'vaccined_date' =>'2024-12-11',
            ],
            [
                'std_id' => 5,
                'vac_id' => 5,
                'vaccined_date' =>'2024-12-11',
            ],


           
        ]);
    }
}
