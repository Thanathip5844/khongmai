<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
            [
                'sid' => 6414421001,
                'fname' => 'Faculty of Nursing',
                'lname' =>2024,
                'std_prg_id' =>1,
            ],
            [
                'sid' => 6414421002,
                'fname' => 'Faculty of Nursing',
                'lname' =>2024,
                'std_prg_id' =>1,
            ],
            [
                'sid' => 6414421003,
                'fname' => 'Faculty of Nursing',
                'lname' =>2024,
                'std_prg_id' =>1,
            ],
            [
                'sid' => 6414421004,
                'fname' => 'Faculty of Nursing',
                'lname' =>2024,
                'std_prg_id' =>1,
            ],
            [
                'sid' => 6414421005,
                'fname' => 'Faculty of Nursing',
                'lname' =>2024,
                'std_prg_id' =>1,
            ],
            
           
        ]);
    }
}
