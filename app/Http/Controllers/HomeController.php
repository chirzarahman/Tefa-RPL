<?php

namespace App\Http\Controllers;

use App\Modeluser;
use App\Order;
use App\Product;
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
        $orders = Order::all();
        $model = \Auth::user()->role;
        if ($model == '1') {
            return view('super.home', compact('orders'));
        }else if($model == '2'){
            return view('admin.home2', compact('orders'));
        }else {
            abort(403);
        }
    }
    
    public function addproduct()
    {
        $model = \Auth::user()->role;
        if($model == '1'){
            return view('addproduct');
        }else if($model == '2'){
            abort(404);
        }
    }
    
    public function profile()
    {
        return view('profile');
    }
}