<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index(){
        $computer = Computer::all();
        return view('computer.index', compact('computer'));
    }

    public function create(){
        return view('computer.create');
    }
    public function store(Request $request){
        $computer = Computer::create($request->all());
        $computer->save();

//        $computer = new Computer();
//        $computer->name = $request->input('name');
//        $computer->computer_id = $request->input('computer_id');
//        $computer->computer_ip = $request->input('computer_ip');
//        $computer->computer_color = $request->input('computer_color');
//        $computer->vendor = $request->input('vendor');
//        $computer->price = $request->input('price');
//        $computer->save();

    }
    public function update(Request $request, $id){
        Computer::find($id)->update($request->all());

    }


    public function addModal(Request $request){
       $computer= Computer::create($request->all());
       $computer->save();
       return response()->json($computer);

    }
    public function edit($id){
        $computer = Computer::findOrFail($id);
        return view('computer.index', compact('computer'));
    }

    public function delete($id){
      Computer::destroy($id);

//        $computer = Computer::findOrFail($id);
//        $computer->delete();

//
//        return response()->json([
//            'success' => 'Record has been deleted successfully!'
//        ]);
    }

    public function show($id){
        $computer = Computer::findOrFail($id);
        return response()->json($computer);
    }
}
