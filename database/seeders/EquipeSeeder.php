<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            'nom' => 'Paw',
            'ville' => 'Dusseldorf',
            'pays' => 'Allemagne',
            'continent_id' => '1',
            'max' => 9,
        ]);
            DB::table('equipes')->insert([
                'nom' => 'Dozo',
                'ville' => 'Bruxelles',
                'pays' => 'Belgique',
                'continent_id' => '1'
            ]);
            DB::table('equipes')->insert([
                'nom' => 'Malongi',
                'ville' => 'Kinshasa',
                'pays' => 'Congo',
                'continent_id' => '2'
    
            ]);
            DB::table('equipes')->insert([
                'nom' => 'Pizza',
                'ville' => 'Rome',
                'pays' => 'Italie',
                'continent_id' => '1'
    
            ]);
    }
}
