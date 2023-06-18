<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TesMentalController extends Controller
{
    //
    public function index()
    {
        return view('test.index');
    }

    public function starttest()
    {
        return view('test.start');
    }

    public function procces(Request $request)
    {
        // dd($request->all());
        // ambil data dari request
        $data = $request->all();
    
        // hitung skor
        $skor = 0;
        foreach ($data as $key => $value) {
            if ($key != '_token') {
                $skor += $value;
            }
        }

        // \dd($skor);

        // tentukan hasil
        $hasil = '';

        if ($skor >= 1 && $skor <= 9) {
            $hasil = 'Sangat Sehat Mental';
        } elseif ($skor >= 10 && $skor <= 19) {
            $hasil = 'Sehat Mental';
        } elseif ($skor >= 20 && $skor <= 29) {
            $hasil = 'Gangguan mental sedang';
        } elseif ($skor >= 30 && $skor <= 39) {
            $hasil = 'Kurang Sehat Mental';
        } elseif ($skor >= 40 && $skor <= 50) {
            $hasil = 'Tidak Sehat Mental';
        }

        // jika login maka simpan history ke dalam database
        if (Auth::check()) {
            $history = new \App\Models\HistoryTestMental;
            $history->kodehistory = \fake()->uuid();
            $history->userId = Auth::user()->id;
            $history->skor = $skor;
            $history->hasil = $hasil;
            $history->save();
        }

        $waktu = \now();

        // tampilkan hasil
        return view('test.result', compact('skor', 'hasil', 'waktu'));
    }

    public function historytest()
    {
        $history = \auth()->user()->history;

        return view('test.history', \compact('history'));
    }

    public function showhistory($kodehistory) 
    {
        $history = \App\Models\HistoryTestMental::where('kodehistory', $kodehistory)->first();

        $skor = $history->skor;
        $hasil = $history->hasil;
        $waktu = $history->created_at;

        return \view('test.result', \compact('skor', 'hasil', 'waktu'));
    }

    public function konsultasi()
    {
        $this->middleware('auth');
        return view('konsultasi');
    }

}
