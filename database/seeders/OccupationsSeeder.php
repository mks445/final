<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $occupations = ['Painter', 'Blocklayer', 'Carprnter', 'Plumber', 'Labour', 'Other'];
        foreach ($occupations as $occupation) {
            DB::table('occupations')->insert([
                    'name' => $occupation

                ]
            );
        }
    }
}
