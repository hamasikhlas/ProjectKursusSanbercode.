<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function tablet()
    {
        $product = Product::whereHas('productCategories', function (Builder $query) {
            $query->where('name', 'like', '%TABLET%');
          })->get();
        return view('tablet', compact('product'));
    }

    public function about()
    {
        return view('about');
    }

    public function laptop()
    {
        $product = Product::whereHas('ProductCategories', function (Builder $query) {
            $query->where('name', 'like', '%LAPTOP%');
            })->get();
        return view('laptop',compact('product'));
    }

    public function computer()
    {
        $product = Product::whereHas('productCategories', function (Builder $query) {
            $query->where('name', 'like', '%KOMPUTER%');
            })->get();
        return view('computer',compact('product'));
    }

    public function produk()
    {
        $product = Product::with('ProductCategories','ProductImages')->get();
        return view('produk',compact('product'));
    }

    public function master()
    {
        return view('layout.master');
    }

    public function contact(){
        return view('contact');
    }

    public function postContact(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'message'=>'required',
        ]);
        $contact = ContactUs::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'message'=>$request->message
        ]);
        $contact->save();
        //send email
        Mail::to($request->email)->send(new WelcomeMail());
        return redirect('/contact');
    }
}
