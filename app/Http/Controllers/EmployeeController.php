<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->validated();

        $employee = new Employee;

        $employee->emp_name = $data['emp_name'];

        $employee->emp_address = $data['emp_address'];

        $employee->employee_id = $data['emp_id'];

        $employee->save();

        return redirect(route('employee.index'))->with('status','Employee Added Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee,$employee_id)
    {
        $employeew = $employee::find($employee_id);
        return view('employee.edit',compact('employeew'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee,$employee_id)
    {
        $data = $request->validated();

        $employeeww = $employee::find($employee_id);

        $employeeww->emp_name = $data['emp_name'];

        $employeeww->emp_address = $data['emp_address'];

        $employeeww->employee_id = $data['emp_id'];

        $employeeww->update();

        return redirect(route('employee.index'))->with('status','Employee Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
