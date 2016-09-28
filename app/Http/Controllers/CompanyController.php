<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;

class CompanyController extends Controller
{

    public function edit(Company $company)
    {
        return view('companyedit',compact('company'));
    }

    public function update(Request $request, $id)
    {

    $company = Company::find($id);

    $this->validate($request, [
        'name' => 'required',
        'definition' => 'required'
    ]);

    $input = $request->all();

        if($request->file('logo')){



            $logo = $request -> file('logo');

            $targetLocation = base_path() . '/public/logo/';
            $targetName=microtime(true)*10000 . '.' . $logo->getClientOriginalName();

            $logo->move($targetLocation, $targetName);

            $url = '/logo/'.$targetName;

            $a = $company->update([
                'logo' => $url
            ]);
        }
    return redirect()->back();
    }

}
