<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;
use App\Menu;
use Auth;


class CompanyController extends Controller
{
    public function __construct(){
        $menus=Menu::all();
        $this->user = Auth::user();
        view()->share('menus', $menus);
        view()->share('user', $this->user);
    }

    public function edit(Company $company)
    {
        return view('companyedit',compact('company'));
    }

    public function update(Request $request, $id)
    {

    $company = Company::find($id);

    $this->validate($request, [
        'name' => 'required',
        'definition' => 'required',
        'logo'   =>  'mimes:jpeg,jpg,png',
        'facebook'   => 'active_url',
        'instagram'   => 'active_url',
        'linkedin'   => 'active_url',
        'website'   => 'active_url'
    ]);
     $company->update([
        'name' => $request->name,
        'definition' => $request->definition,
        'address' => $request->adress,
        'fax' => $request->fax,
        'phone' => $request->phone,
        'phone1' => $request->phone1,
        'facebook' => $request->facebook,
        'instagram' => $request->instagram,
        'linkedin' => $request->linkedin,
        'website' => $request->website,
        'email' => $request->email,
     ]);

    // $input = $request->all();

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
