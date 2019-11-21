<?php

namespace App\Http\Controllers;

use App\teacher;
use Illuminate\Http\Request;
use DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $table = "teachers";
    public function index()
    {
        $data = DB::table($this->table)->get();
        return view('teacher.showData',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.addData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        teacher::create([


          'name' =>$request['one'],
          'subject' =>$request['two'],
          'qualification' =>$request['three'],
          'department' =>$request['four'],

        ]);

       return redirect()->back()->with('message_add','Data Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher,$id)
    {
        $data = teacher::find($id);
        return view('teacher.edit',compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public static function update(Request $request, teacher $teacher,$id)
    {
               $data                    = teacher::find($id);
               $data->name              = $request->input('one');
               $data->subject           = $request->input('two');
               $data->qualification     = $request->input('three');
               $data->department        = $request->input('four');
               $data->save();
               return redirect()->back()->with('message','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher,$id)
    {
        $teacher->where('id',$id)->delete();
        return redirect()->back()->with('message_update','Data Successfully Deleted');
    }
}
