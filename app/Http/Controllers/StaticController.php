<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view("index");
    }
    public function about() {
        return view("about");
    }
    public function contact() {
        return view("contact");
    }
    public function products() {
        return view("products");
    }
    public function create() {
        return view("create");
    }
    public function cart() {
        return view("cart");
    }
    public function product() {
        return view("product");
    }
}
