<?php

namespace App\Http\Controllers;

use App\DataTables\CompanyDatatable;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(CompanyDatatable $datatable)
    {
        return $datatable->render('dashboard.companies.index');
    }

    public function create()
    {
        return view('dashboard.companies.create');
    }

    public function store(CompanyRequest $request)
    {
        try {
            Company::create($request->validated());
            session()->flash('success', 'company created successfully');
            return redirect()->route('companies.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'Try again , error happened');
            return redirect()->route('companies.index');
        }
    }

    public function edit(Company $company)
    {
        return view('dashboard.companies.edit', compact('company'));
    }

    public function update(Company $company, CompanyRequest $request)
    {
        try {
            $company->update($request->validated());
            session()->flash('success', 'company updated successfully');
            return redirect()->route('companies.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'Try again , error happened');
            return redirect()->route('companies.index');
        }
    }

    public function destroy($id)
    {
        try {
            $company = Company::findOrFail($id);
            deleteImage($company->logo);
            $company->delete();
            session()->flash('success', 'company deleted successfully');
            return redirect()->route('companies.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'Try again , error happened');
            return redirect()->route('companies.index');
        }
    }
}
