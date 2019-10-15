<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todo;

class todoController extends Controller
{
    public function index(){
    	$data = Todo::All();
    	return response($data);
    }

    public function show($id){
    	$data = Todo::where('id',$id)->get();
    	return response($data);
    }

    public function store(Request $request){
    	$data = new Todo();
    	$data->activity = $request->input('activity');
    	$data->description = $request->input('description');
    	$data->save();

    	return response('Berhasil tambah data');
    }

    public function update(Request $request, $id){
    	$data-> Todo::where('id',$id)->first();
    	$data->activity = $request->input('activity');
    	$data->description = $request->input('description');
    	$data->save();

    	return response('Berhasil merubah data');
    }

    public function destroy($id){
    	$data = Todo::where('id',$id)->first();
    	$data->delete();

    	return response('Berhasil hapus data');
    }
}
