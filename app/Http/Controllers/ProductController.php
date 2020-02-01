<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $model = \Auth::user()->role;
        if($model == '1'){
            return view('super.product', compact('products'));
        }else if ($model == '2') {
            return view('admin.product2', compact('products'));
        }else {
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|string',
            'icon' => 'required|sometimes|image|mimes:jpg,jpeg,svg,png|max:50000',
            'image' => 'required|sometimes|image|mimes:jpg,jpeg,svg,png|max:50000',
        ]);
        
        $icon = $request->file('icon');   
        $image = $request->file('image');
        $nameIcon = uniqid().'.'.$icon->getClientOriginalExtension();
        $nameImage = uniqid().'.'.$image->getClientOriginalExtension();
        $path = public_path('/img/product/');
        $icon->move($path, $nameIcon);
        $image->move($path, $nameImage);
        Product::create([
            'name' => $request->name,
            'platform' => $request->platform,
            'description' => $request->description,
            'link' => $request->link,
            'icon' => '/img/product/'.$nameIcon,
            'image' => '/img/product/'.$nameImage,
        ]);
        return redirect ('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $model = \Auth::user()->role;
        if($model == '1'){
            return view ('editproduct', compact('product'));
        }else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {        
        $product->name = $request->name;
        $product->platform = $request->platform;
        $product->description = $request->description;
        $product->link = $request->link;

        $path = public_path('/img/product/');
        if ($request->file('icon')) {
            File::delete(public_path($product->icon));
            $icon = $request->file('icon');   
            $nameIcon = uniqid().'.'.$icon->getClientOriginalExtension();
            $icon->move($path, $nameIcon);
            $product->icon = '/img/product/'.$nameIcon;
        }
        
        if ($request->file('image')) {
            File::delete(public_path($product->image));
            $image = $request->file('image');
            $nameImage = uniqid().'.'.$image->getClientOriginalExtension() ;
            $image->move($path, $nameImage);
            $product->image = '/img/product/'.$nameImage;
        }
        
        $product->update();
        return redirect ('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}