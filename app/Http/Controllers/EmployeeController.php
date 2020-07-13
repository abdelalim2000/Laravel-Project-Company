<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Event;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Employee::orderBy('id', 'desc')->paginate(6);
            return view('employee', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create Employee View
        return view("update");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'salary' => 'required'
        ]);
        $event = new Employee();
        $event->first_name = $request->first_name;
        $event->last_name = $request->last_name;
        $event->email = $request->email;
        $event->salary = $request->salary;
        $event->save();
        return redirect('/employees')->with('Msg', "Employee created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Employee::find($id);
        return view('view', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Employee::find($id);
        return view('edit', compact('event'));
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
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'salary' => 'required'
        ]);
        $event = Employee::find($id);
        $event->first_name = $request->first_name;
        $event->last_name = $request->last_name;
        $event->email = $request->email;
        $event->salary = $request->salary;
        $event->save();
        return redirect('/employees')->with('Msg', "Employee Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Employee::find($id);
        $event->delete();
        return redirect('/employees')->with("Msg", "Employee Deleted Successfully");
    }
}
