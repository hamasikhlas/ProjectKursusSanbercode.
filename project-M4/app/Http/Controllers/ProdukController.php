<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:produk',
            'umur' => 'required|integer:produk',
            'bio' => 'required'
        
        ]);
        $query = DB::table('produk')->insert([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
            
        ]);
        return redirect('/produk');
    }
}
