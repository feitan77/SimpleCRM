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
        $company=new Company();
        $company->name=request('name');
        $company->email=request('email');
        $company->website=request('website');

        if ($request->has('logo')) {
            $file = $request->file('logo');
            $extension = $file->extension();
            $filename  = 'logo-' . time() . '.' . $extension;

            $path=$file->storeAs(
                'public',
                     $filename,
            );
            $company->logo=$filename;
        }
        $company->save();
        return redirect('/companies');
    }

    public function edit($id){
        $company=Company::find($id);
        return view('companies.edit', ['company'=>$company]);
    }

    public function update($id, Request $request){
        $company=Company::find($id);
        $company->name=request('name');
        $company->email=request('email');
        $company->website=request('website');

        if ($request->has('logo')) {
            $file = $request->file('logo');
            $extension = $file->extension();
            $filename  = 'logo-' . time() . '.' . $extension;

            $path=$file->storeAs(
                'public',
                $filename,
            );
            $company->logo=$filename;
        }

        $company->save();
        return redirect('/companies');

    }

    public function destroy($id)
    {
        Company::destroy($id);

        echo("success!");
        return redirect('/companies');
    }
}
