<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        return view('computers.index',
            [
                'computers' => Computer::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request-> validate([
            'computer-name' => 'required',
            'computer-country' => 'required',
            'computer-price' => ['required','integer']
        ]);

        $computer = new Computer;

        $computer-> name = strip_tags($request->input('computer-name'));
        $computer-> country = strip_tags($request->input('computer-country'));
        $computer-> price = strip_tags($request->input('computer-price'));

        $computer-> save();

        return redirect()-> route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // get target 
        $computer = Computer::find($id);
        
        if ($computer===null) {
        abort(404);
        }

        // return data as var
        return view('computers.show',[
            'computer' =>  $computer
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('computers.edit',[
            'computer' =>  Computer::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request-> validate([
            'computer-name' => 'required',
            'computer-country' => 'required',
            'computer-price' => ['required','integer']
        ]);

        $computer = Computer::findOrFail($id);

        $computer-> name = strip_tags($request->input('computer-name'));
        $computer-> country = strip_tags($request->input('computer-country'));
        $computer-> price = strip_tags($request->input('computer-price'));

        $computer-> save();

        return redirect()-> route('computers.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $computer = Computer::findOrFail($id);
        $computer-> delete();
        return redirect()-> route('computers.index',$id);
    }
}
    // private static function getData(){
    //     return [
    //         [
    //             'id'=>1,
    //             'name'=>'LG',
    //             'country'=>'USA',
    //             'price'=>200,
    //         ],
    //         [
    //             'id'=>2,
    //             'name'=>'Hp',
    //             'country'=>'SY',
    //             'price'=>990,

    //         ],
    //         [
    //             'id'=>3,
    //             'name'=>'Dell',
    //             'country'=>'KUR',
    //             'price'=>760,

    //         ],
    //     ];
    // }