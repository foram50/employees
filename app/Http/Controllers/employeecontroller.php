<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = DB::table('employees')->get();
        return view('employee.view',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flag=DB::table('employees')->insert([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'salary'=>$request->salary,
            'joining_date'=>$request->joining_date
            ]);
            if($flag)
            {
                return redirect()->route('employee.index');
            }
            else {
                return "false";
            }
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = DB::table('employees')->where('id',$id)->first();
        return view('employee.edit',compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $employees=DB::table('employees')->where('id',$id)->update([
             'name'=>$request->name,
             'designation'=>$request->designation,
             'salary'=>$request->salary,
             'joining_date'=>$request->joining_date
             ]);
             if($employees)
             {
                return redirect()->route('employee.index');
             }
             else {
                 return "false";
            }
        //return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag=DB::table('employees')->where('id',$id)->delete();
            if($flag)
            {
                return redirect()->route('employee.index');
            }
            else {
                return "false";
           }
    }
}
