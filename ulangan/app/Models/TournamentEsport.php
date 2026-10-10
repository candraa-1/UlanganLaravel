<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tournamentesport extends Model
{
    protected $table = 'tournament_esports';
    protected $fillable = ['nama_game'];

    public function esports()
    {
        return $this->hasMany(Esport::class);  
    }
}
