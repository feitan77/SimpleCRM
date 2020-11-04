<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){

        $companies=Company::all();
        return view('companies.index', ['companies' => $companies]);
    }

    public function create(){
        return view('companies.create');
    }

    public function store(Request $request){
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'website'=>'required|url',
            'logo'=>'image|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100'
        ]);

        $company=new Company();
        $company->name=request('name');
        $company->email=request('email');
        $company->website=request('website');
        $this->handleLogo($request, $company);


        $company->save();
        return redirect('/companies');
    }

    public function edit(Company $company){
        return view('companies.edit', ['company'=>$company]);
    }

    public function update(Company $company, Request $request){
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'website'=>'required|url',
            'logo'=>'image|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100'
        ]);
        $company->name=request('name');
        $company->email=request('email');
        $company->website=request('website');
        $this->handleLogo($request, $company);

        $company->save();
        return redirect('/companies');
    }

    public function destroy($id)
    {
        Company::destroy($id);

        echo("success!");
        return redirect('/companies');
    }


    public function handleLogo(Request $request, Company $company): void
    {
        if ($request->has('logo')) {
            $file = $request->file('logo');
            $extension = $file->extension();
            $filename = 'logo-' . time() . '.' . $extension;
            $file->storeAs('public', $filename);
            $company->logo = $filename;
        }
    }
}
