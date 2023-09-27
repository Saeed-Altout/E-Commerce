<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view("index");
    }
    public function cart() {
        return view("cart");
    }
}
