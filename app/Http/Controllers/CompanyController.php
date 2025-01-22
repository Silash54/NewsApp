<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Company::all();
        return view('admin.company.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies=Company::first();
        if(!empty($companies))
        {
            return redirect()->route('company.index');
        }
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company= new Company();
        $company->name=$request->name;
        $company->email=$request->email;
        $company->pan=$request->pan;
        $company->phone=$request->phone;
        $company->facebook=$request->facebook;
        if($request->hasFile('logo'))
        {
            $file=$request->logo;
            $newName=time() . "." . $file->getClientOriginalExtension();
            $file->move('images',$newName);
            $company->logo="images/$newName";
        }
        $company->save();
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datas=Company::find($id);
        return view('admin.company.edit',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company= Company::find($id);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->pan=$request->pan;
        $company->phone=$request->phone;
        $company->facebook=$request->facebook;
        if($request->hasFile('logo'))
        {
            if($request->logo && file_exists(public_path($request->logo)))
            {
                unlink(public_path($request->logo));
            }
            $file=$request->logo;
            $newName=time() . "." . $file->getClientOriginalExtension();
            $file->move('images',$newName);
            $company->logo="images/$newName";
        }
        $company->update();
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $id;
        $companies=Company::find($id);
        $companies->delete();
        return redirect()->route('company.index');
    }
}
