<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userList;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $students = userList::all();
      //  return view('student.studentlist');
        return view('userList',['students' => $students]);
       //return view('userList');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        //
         $student = userList::where('studentId','=',$req->id)->first();
               
        return view('userList',['students' => null, 'student' => $student]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        //
         $student = userList::where('studentId','=',$req->id)->first();

        $student->studentName = $req->username;
        $student->studentEmail = $req->email;
        $student->studentPhone = $req->phone;
       
        $student->save();

        return redirect()->route('userlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser(Request $req)
    {
        $s = userList::where('studentId','=',$req->id)->first();

        $s->delete();

        return redirect()->route('userlist');
    }
}
