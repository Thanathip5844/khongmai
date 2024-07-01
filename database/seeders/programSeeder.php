<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class programSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program')->insert([
            [
                'program_th' => 'วิชาสังคม',
                'program_en' => 'Faculty of Nursing',
                'grad_year' =>2024,
                'prg_fac_id' =>1,
            ],
            [
                'program_th' => 'คณะพยาบาลศาสตร์',
                'program_en' => 'Faculty of Nursing',
                'grad_year' =>2024,
                'prg_fac_id' =>1,
            ],
            [
                'program_th' => 'คณะพยาบาลศาสตร์',
                'program_en' => 'Faculty of Nursing',
                'grad_year' =>2024,
                'prg_fac_id' =>1,
            ],
            [
                'program_th' => 'คณะพยาบาลศาสตร์',
                'program_en' => 'Faculty of Nursing',
                'grad_year' =>2024,
                'prg_fac_id' =>1,
            ],
            [
                'program_th' => 'คณะพยาบาลศาสตร์',
                'program_en' => 'Faculty of Nursing',
                'grad_year' =>2024,
                'prg_fac_id' =>1,
            ],
           
        ]);
    }
}
