<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class Products extends Controller
{
    public function index(){
        $data=Product::all();
        return response()->json($data);
    }
}
