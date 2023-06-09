<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        return view('wisatas.index', compact(['wisatas']));
    }

    public function create()
    {
        return view('wisatas.create');
    }

    public function store(Request $request)
    {
        Wisata::create($request->all());
        return  redirect('/wisatas');
    }

    public function edit($id)
    {
        $wisatas = Wisata::find($id);
        return view('wisatas.edit', compact(['wisatas']));
    }
    public function update(Request $request, $id)
    {
        $wisatas =  Wisata::find($id);
        $wisatas->update($request->all());
        return redirect('/wisatas');
    }
    public function destroy($id)
    {
        $wisatas = Wisata::find($id);
        $wisatas->delete();
        return redirect('/wisatas');
    }
}
