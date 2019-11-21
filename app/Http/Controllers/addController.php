<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentModel;
use DB;
class addController extends Controller
{
	public $data;
	public $table = 'details';
    public function add(Request $request)
	{
		$object = new studentModel;
		$object->name = $request->one;
		$object->roll = $request->two;
		$object->class = $request->three;
		$object->dept = $request->four;
		$object->save();
		//print_r($request->input());
		//return redirect('show')->with('message_add','Data Successfully added');
		return redirect()->back()->with('message_add','Data Successfully added');
	}
	
	
	public function show()
	{   //$object = new studentModel;
		$data = studentModel::all();
		return view('dataShow',['data'=>$data]);
		//return redirect()->back();
	}
	
	
	public function edit($id)
	{   //$object = new studentModel;
		$data = studentModel::find($id);
		return view('update',compact('data'));
	}
	
	public function update(Request $request,$id)
	{   
	 
	   $data         = studentModel::find($id);
	   $data->name   = $request->input('one');
	   $data->roll   = $request->input('two');
	   $data->class  = $request->input('three');
	   $data->dept   = $request->input('four');
	   $data->save();
	   
	   return redirect('show')->with('message_update','Data Successfully uploaded');
	   //return redirect('/update');	    
		
	}
	
	function delete($id)
	{   
		DB::table($this->table)->where('id',$id)->delete();
		return redirect('show')->with('message_delete','Data Successfully Deleted');
	}
	

	
	public function home()
	{
		return view('home');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
