<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class esport extends Model
{
    protected $table = 'esports';

    protected $fillable = [
        'tournament_esport_id',
        'nama_game',
        'nama_tim',
        'jumlah_juara',
        'total_hadiah',
    ];

     public function tournament_esport()
    {
        return $this->belongsTo(TournamentEsport::class);
    }
}


