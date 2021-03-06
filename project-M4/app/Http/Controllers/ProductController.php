<?php

namespace App\Http\Controllers;

use App\CategoriesModel;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('ProductCategories')->get();
        return view('product.productList',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productCat = CategoriesModel::all();
        return view('product.productCreate',compact('productCat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required',
            'description'=>'required',
            'productCategory'=>'required',
            // ini jangan diubah, ga tahu kenapa di tempat hamas jadi bbikin ga jalan
            // 'uploadFile'=>'required',
            // 'uploadFile.*'=>'mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = Product::create([
            'name'=> $request->nama,
            'description'=>$request->description,
            'product_category_id'=>$request->productCategory
        ]);

        $i=0;
       if($request->hasFile('uploadFile')){
           $uploads = $request->file('uploadFile');

           foreach ($uploads as $files) {
            $tujuan_upload = public_path().'/data_file';
            $nama_file = $i.'-'.time().'.'.$files->getClientOriginalExtension();
            $files->move($tujuan_upload, $nama_file);
            // $productImg->name=$nama_file;
            // $productImg->image_url='/data_file/'.$nama_file;
            // $productImg->image_description=$request->description;
            $product->productImages()->create([
                    'name'=>$nama_file,
                    'image_url'=>'/data_file/'.$nama_file,
                    'image_description'=>$request->description
                ]);
                $i++;
           }
        // $file = $request->file('uploadFile');
        // $nama_file = time()."_".$file->getClientOriginalName();
        // $tujuan_upload = public_path().'/data_file';
		// $file->move($tujuan_upload,$nama_file);
        // $product->productImages()->create([
        //     'name'=>$nama_file,
        //     'image_url'=>'/data_file/'.$nama_file,
        //     'image_description'=>$request->description
        // ]);
       }
        $product->save();
        return redirect('/product');
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
        $product = Product::with('ProductCategories','ProductImages')->find($id);
        return view('product.productShow',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('ProductCategories')->find($id);
        $productCat = CategoriesModel::all();
        return view('product.productEdit',compact(['product','productCat']));
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
        //
        $request->validate([
            'nama'=>'required',
            'description'=>'required',
            'productCategory'=>'required',
        ]);
      
        $product = Product::find($id);
        $product->name = $request->nama;
        $product->description = $request->description;
        $product->product_category_id = $request->productCategory;
        $product->update();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $product = Product::find($id);
        $productImage = ProductImage::where('product_id',$id)->first();
        if ($productImage!=null) {
            File::delete(public_path().$productImage->image_url);
        }
        $product->delete();
        return redirect('/product');
    }
}