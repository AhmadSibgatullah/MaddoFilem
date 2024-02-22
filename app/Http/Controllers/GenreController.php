<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function create()
    {
        return view('genre.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ganre' => 'required',
            'descripsi' => 'required',
        ]);

        DB::table('genre')->insert([
            'nama_gener' => $request['nama_ganre'],
            'descripsi' => $request['descripsi']
        ]);

        return redirect('/genre');
    }

    public function index()
    {
        return view('genre.tampil');
    }
}
