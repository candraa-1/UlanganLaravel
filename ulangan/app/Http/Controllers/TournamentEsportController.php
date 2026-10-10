<?php

namespace App\Http\Controllers;

use App\Models\Esport;
use App\Models\TournamentEsport; // Model yang benar
use Illuminate\Http\Request;

class TournamentEsportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $esports = \App\Models\Esport::with('tournament_esport')->get();
    foreach ($esports as $esport) {
        $esport->nama_game = $esport->tournament_esport ? $esport->tournament_esport->nama_game : 'Tidak ada tournament';
    }

    return view('esport.index', compact('esports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tournament_esports = \App\Models\tournamentesport::all();
        return view('esport.create' , compact('tournament_esports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tournament_esport_id' => 'required|exists:tournament_esports,id',
            'nama_tim' => 'required|string|max:225',
            'jumlah_juara' => 'required|integer',
            'total_hadiah' => 'required|integer',
        ]);

        $game = \App\Models\tournamentesport::find($request->tournament_esport_id);

        Esport::create([
            'tournament_esport_id' => $request->tournament_esport_id,
            'nama_game' => $game->nama_game,
            'nama_tim' => $request->nama_tim,
            'jumlah_juara' => $request->jumlah_juara,
            'total_hadiah' => $request->total_hadiah,
        ]);

        return redirect('/esport')
            ->with('success' , 'Data Tournament Esports berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $esport = Esport::with('tournament_esport')->findOrFail($id);
        return view('esport.show' , compact('esport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $esport = Esport::with('tournament_esport')->findOrFail($id);
        
        $tournament_esports = TournamentEsport::all();

        return view('esport.edit' , compact('esport', 'tournament_esports'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'tournament_esport_id' => 'required|exists:tournament_esports,id',
            'nama_tim' => 'required|string|max:225',
            'jumlah_juara' => 'required|integer',      
            'total_hadiah' => 'required|integer',      
        ]);

        $game = \App\Models\tournamentesport::find($request->tournament_esport_id);

        $esport = Esport::findOrFail($id);

        $esport->update([
            'tournament_esport_id' => $request->tournament_esport_id,
            'nama_game' => $game->nama_game,
            'nama_tim' => $request->nama_tim,
            'jumlah_juara' => $request->jumlah_juara,      
            'total_hadiah' => $request->total_hadiah,      
        ]);

        return redirect('/esport')
            ->with('sukses', 'Data Tournament Esports berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $esport = Esport::findOrFail($id);
        $esport->delete();
        return redirect('/esport')
            ->with('sukses' , 'Data Tournament Esports berhasil dihapus');
    }
}
