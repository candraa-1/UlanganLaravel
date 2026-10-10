<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TournamentEsport; 

class TournamentEsportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        TournamentEsport::create([
            'nama_game' => 'ML'
        ]);
       TournamentEsport::create([
            'nama_game' => 'FF'
        ]);
       TournamentEsport::create([
            'nama_game' => 'PUBG'
        ]);
       
    }
}




