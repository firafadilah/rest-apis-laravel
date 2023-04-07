<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        return view('products.index', compact(['wisatas']));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Wisata::create($request->all());
        return  redirect('/');
    }
}
