<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CeritaMental extends Controller
{
    //
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        // ambil cerita mental dari db
        $cerita = \App\Models\CeritaMental::orderBy('created_at', 'desc')->paginate(6);

        return view('cerita.index', compact('cerita'));
    }

    public function show($slug) 
    {
        $cerita = \App\Models\CeritaMental::where('slug', $slug)->first();

        return view('cerita.show', compact('cerita'));
    }

    public function created() 
    {
        return view('cerita.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'judul' => 'required',
            'narasi' => 'required',
            'pesan' => 'required'
        ]);

        $cerita = new \App\Models\CeritaMental;
        $cerita->userId = Auth::user()->id;
        $cerita->kodecerita = \fake()->uuid();
        $cerita->judul = $request->judul;
        $cerita->slug = Str::slug($request->judul, '-');
        $cerita->narasi = nl2br(e($request->narasi));

        // ambil beberapa kalimat pertama dari narasi
        // $kalimat = explode('.', $request->narasi);
        // $cerita->deskripsi = $kalimat[0] . '.';

        // ambil 50 kata pertama dari narasi
        $kata = explode(' ', $request->narasi);
        $cerita->deskripsi = implode(' ', array_slice($kata, 0, 50)) . '.';

        $cerita->pesan = $request->pesan;
        $cerita->save();

        return redirect()->route('cerita')->with('success', 'Cerita berhasil ditambahkan');
    }

    public function destroy(Request $request) 
    {

        $cerita = \App\Models\CeritaMental::where('kodecerita', $request->kodecerita)->first();
        $cerita->delete();

        return redirect()->route('cerita')->with('success', 'Cerita berhasil dihapus');
    }
}
