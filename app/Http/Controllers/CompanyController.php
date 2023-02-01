<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //display listing of resources
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', compact('companies'));
    }

    //show the form for creating a new resource
    public function create()
    {
        return view('companies.create');
    }

    //store the new resource in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        Company::create($request->post());

        return redirect()->route('companies.index')->with('success', 'Company has been created successfully');
    }

    //display specified company
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    //show form to edit new company resource
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    //update company resource
    public function update(Company $company, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $company->fill($request->post())->save();
        return redirect()->route('companies.index')->with('success', 'Company has been updated successfully');
    }

    //delete specific company resource from database
    public function destroy(Company $company) {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully');
    }
}
