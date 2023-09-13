<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function index(){
        $fakeData=[
            'id'=>1,
            'name'=>'Saeed Altout',
            'email'=>'saeedaltoutpro@gmail.com',
        ];

        return response()->json($fakeData);
        }
}
