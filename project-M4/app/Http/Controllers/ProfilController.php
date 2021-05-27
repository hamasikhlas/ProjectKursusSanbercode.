<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ProfilModel;
use Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = ProfilModel::where('user_id', Auth::user()->id)->first();
        return view('profil.index', compact('profil'));
    }
    public function lengkapi()
    {
        $profil = ProfilModel::where('user_id', Auth::user()->id);
        return view('profil.lengkapi', compact('profil')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'nama'        => 'required',
			'alamat'      => 'required',
            'umur'        => 'required',
            'role'        => 'required',  
		]);

        ProfilModel::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
            'umur' => $request->umur,
            'role' => $request->role,
            'user_id' => Auth::user()->id
    	]);
 
    	return redirect('/profil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( $request, [
            'nama' => 'required',
            'alamat' => 'required',
            'umur'  => 'required',
            'role' => 'required'
        ]);
        
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'umur'  => $request->umur,
            'role' => $request->role
        ];
        
        ProfilModel::whereId($id)->update($data);
        return redirect('/produk_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
