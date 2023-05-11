<?php

namespace App\Http\Controllers;

use App\Models\Sparring;
use Illuminate\Http\Request;

class SparringController extends Controller
{
    public function index()
    {
        $sparring = Sparring::all();
        return view('sparring.home', compact(['sparring']));
    }

    public function create()
    {
        return view('sparring.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Sparring::create($request -> all());
        return redirect('/home');
    }

    public function detail($id)
    {
        $sparring = Sparring::find($id);
        return view('sparring.detail', compact(['sparring']));
    }
}
