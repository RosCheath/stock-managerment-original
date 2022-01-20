<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

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

        return view('home',);
    }
    public function home_dashboard()
    {
        $productCount = DB::table('products')->count();
        Toastr::success('Successfully', 'Login', ["positionClass" => "toast-top-right"]);
        return view('dashboard.dashboard_home',compact('productCount'));
    }
}
