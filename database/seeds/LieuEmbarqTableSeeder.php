<?php

use Illuminate\Database\Seeder;
use App\Models\LieuEmbarq;

class LieuEmbarqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LieuEmbarq::create([
        	'id'=>'1',
        	'idTrjt'=>'1',
        	'lieuEmbarq'=>'Base',
        ]);

        LieuEmbarq::create([
        	'id'=>'2',
        	'idTrjt'=>'1',
        	'lieuEmbarq'=>'Stade',
        ]);

        LieuEmbarq::create([
            'id'=>'3',
            'idTrjt'=>'2',
            'lieuEmbarq'=>'Auto-garre',
        ]);

        LieuEmbarq::create([
            'id'=>'4',
            'idTrjt'=>'4',
            'lieuEmbarq'=>'Base, Zongo',
        ]);
    }
}
