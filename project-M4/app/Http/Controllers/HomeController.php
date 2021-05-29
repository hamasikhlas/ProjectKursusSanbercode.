<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('tablet');
    }

    public function about()
    {
        return view('about');
    }

    public function laptop()
    {
        return view('laptop');
    }

    public function computer()
    {
        return view('computer');
    }

    public function produk()
    {
        return view('produk');
    }

    public function master()
    {
        return view('layout.master');
    }
}
