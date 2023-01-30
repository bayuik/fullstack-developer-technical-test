<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'image' => 'mimes:jpg,png',
            ],
            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpg and png are allowed.'
            ]
        );

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->nip = $request->nip;
        $employee->date_of_birth = $request->date_of_birth;
        // $employee->year_of_birth = $request->year_of_birth;
        $employee->address = $request->address;
        $employee->religion = $request->religion;
        $employee->position_id = $request->position;
        $employee->department = $request->department;
        $employee->status = $request->status;
        $employee->image = $request->image;
        $employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
