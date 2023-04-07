<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataApiController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        return response()->json(['message' => 'Success', 'data' => $wisatas]);
    }

    public function show($id)
    {
        $wisata = Wisata::find($id);
        return response()->json(['message' => 'Success', 'data' => $wisata]);
    }

    public function store(Request $request)
    {
        $wisata = Wisata::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $wisata]);
    }

    public function update(Request $request, $id)
    {
        $wisatas =  Wisata::find($id);
        $wisatas->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $wisatas]);
    }

    public function destroy($id)
    {
        $wisatas = Wisata::find($id);
        $wisatas->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
