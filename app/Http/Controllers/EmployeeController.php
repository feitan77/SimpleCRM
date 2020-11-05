<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::with('company')->get();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
        request()->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
        ]);

        $employee=new Employee();
        $employee->firstName=request('firstName');
        $employee->lastName=request('lastName');
        $employee->email=request('email');
        $employee->phone=request('phone');

        $employee->save();
        return redirect('/employees');
    }

    public function edit(Employee $employee){
        return view('employees.edit', ['employee'=>$employee]);
    }

    public function update(Employee $employee, Request $request){
        request()->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
        ]);

        $employee->firstName=request('firstName');
        $employee->lastName=request('lastName');
        $employee->email=request('email');
        $employee->phone=request('phone');

        $employee->save();
        return redirect('/employees');
    }

    public function destroy($id)
    {
        Employee::destroy($id);

        echo("success!");
        return redirect('/employees');
    }
}
