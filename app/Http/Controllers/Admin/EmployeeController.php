<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // $employees = Employee::orderBy('created_at', 'desc')->get();
        $employees = Employee::paginate(5); //10

        return view('employee.index',[
            'employees' => $employees
        ]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $new_employee = new Employee();
        $new_employee->name = $request->name;
        $new_employee->email = $request->email;
        $new_employee->logo = $request->logo;
        $new_employee->website = $request->website;
        $new_employee->save();

        return redirect()->back()->withSuccess('Employee is sucsess added!');
    }

    public function show(Employee $employee)
    {
        return view('employee.view',[
            'employee' => $employee
        ]);
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit',[
            'employee' => $employee
        ]);
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->logo = $request->logo;
        $employee->website = $request->website;
        $employee->save();

        return redirect()->back()->withSuccess('Employee is sucsess update!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back()->withSuccess('Employee is sucsess delete!');
    }
}
