<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index',[
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('product-name');
        $product->description = $request->input('product-description');
        $product->price = $request->input('product-price');
        $product->imgUrl = $request->input('product-imgUrl');
    
        $product->save();

        return  redirect()->route('products.index',$request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      return view('products.show',[
        'product' => Product::findOrFail($id)
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('products.edit',[
            'product' => Product::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('product-name');
        $product->description = $request->input('product-description');
        $product->price = $request->input('product-price');
        $product->imgUrl = $request->input('product-imgUrl');
    
        $product->save();

        return  redirect()->route('products.index',$request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
    
        $product->delete();

        return  redirect()->route('products.index',$id);
    }
}
