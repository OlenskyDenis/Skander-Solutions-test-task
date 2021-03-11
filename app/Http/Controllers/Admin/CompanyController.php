<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        // $companies = Company::orderBy('created_at', 'desc')->get();
        $companies = Company::paginate(5); //10

        return view('company.index',[
            'companies' => $companies
        ]);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $new_company = new Company();
        $new_company->name = $request->name;
        $new_company->email = $request->email;
        $new_company->logo = $request->logo;
        $new_company->website = $request->website;
        $new_company->save();

        return redirect()->back()->withSuccess('Company is sucsess added!');
    }

    public function show(Company $company)
    {
        return view('company.view',[
            'company' => $company
        ]);
    }

    public function edit(Company $company)
    {
        return view('company.edit',[
            'company' => $company
        ]);
    }

    public function update(Request $request, Company $company)
    {
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = $request->logo;
        $company->website = $request->website;
        $company->save();

        return redirect()->back()->withSuccess('Company is sucsess update!');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->back()->withSuccess('Company is sucsess delete!');
    }
}
