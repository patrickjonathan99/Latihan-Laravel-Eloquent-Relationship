<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employee = Employee::latest()->get();
        return view('employee', [
            "title" => "Employee",
            "employees" => $employee
        ]);
    }
}
