<?php

namespace App\Http\Controllers;

use App\Models\pustaka;
use Illuminate\Http\Request;

class PustakaController extends Controller
{
    public function index()
    {
        $data = pustaka::all();
        return view('Pustaka', compact('data'));
    }

    public function store(Request $request)
    {
        pustaka::create($request->all());
        return redirect()->route('Pustaka');

        // return "berhasil"
        return redirect()->route('Pustaka')->with('Berhasil di tambahkan');
    }
}
