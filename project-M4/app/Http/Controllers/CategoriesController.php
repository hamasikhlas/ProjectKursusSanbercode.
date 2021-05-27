<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CategoriesModel;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = CategoriesModel::all();
        return view('categori.categori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categori.create');
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
			'name'                  => 'required',
			'description'           => 'required',
            'image_url'             => 'required',
            'image_description'     => 'required'   
		]);

        CategoriesModel::create([
    		'name' => $request->name,
    		'description' => $request->description,
            'image_url' => $request->image_url,
            'image_description' => $request->image_description
    	]);
 
    	return redirect('/produk_categories');
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
        $post = CategoriesModel::find($id);
        return view('categori.edit', compact('post'));
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url'  => 'required',
            'image_description' => 'required'
        ]);

        $post = CategoriesModel::find($id);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image_url = $request->image_url;
        $post->image_description = $request->image_description;
        $post->update();
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
        $post = CategoriesModel::find($id);
        $post->delete();
        return redirect('/produk_categories');
    }
}
