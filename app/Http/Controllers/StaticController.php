<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Selected_item;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index() {
        return view("index");
    }
    public function about() {
        return view("about");
    }

    public function cart()
    {
        $Products = Product::all();
        $selected_item = new Selected_item();
        $selected_item->name ='product-name';
        $selected_item->user_id =auth()->user()->getAuthIdentifier();
        //$selected_item->save();
        return view("cart",compact('selected_item','Products'));
    }
    public function auth() {
        return view("auth");
    }
}
