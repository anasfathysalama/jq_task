<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeeDatatable;
use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(EmployeeDatatable $datatable)
    {
        return $datatable->render('dashboard.employees.index');
    }

    public function create()
    {
        $companies = Company::query()->get(['id', 'name']);
        return view('dashboard.employees.create', compact('companies'));
    }

    public function store(EmployeeRequest $request)
    {
        try {
            Employee::create($request->validated());
            session()->flash('success', 'employee created successfully');
            return redirect()->route('employees.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'Try again , error happened');
            return redirect()->route('employees.index');
        }
    }

    public function edit(Employee $employee)
    {
        $companies = Company::query()->get(['id', 'name']);
        return view('dashboard.employees.edit', compact('employee', 'companies'));
    }

    public function update(Employee $employee, EmployeeRequest $request)
    {
        try {
            $employee->update($request->validated());
            session()->flash('success', 'employee updated successfully');
            return redirect()->route('employees.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'Try again , error happened');
            return redirect()->route('employees.index');
        }
    }

    public function destroy($id)
    {
        try {
            Employee::findOrFail($id)->delete();
            session()->flash('success', 'employee deleted successfully');
            return redirect()->route('employees.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'Try again , error happened');
            return redirect()->route('employees.index');
        }
    }
}
