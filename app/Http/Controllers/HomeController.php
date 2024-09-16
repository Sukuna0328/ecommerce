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
    public function cart()
    {
        return view('cart');
    }
    public function admin()
    {
        return view('admin');
    }
    public function product()
    {
        return view('product');
    }
    public function profile()
    {
        return view('profile');
    }
    public function checkout()
     {
        return view('checkout');
     }
     public function home()
    {
        return view('customer');
    }
    public function shipping()
    {
        return view('shipping');
    }
 
}
