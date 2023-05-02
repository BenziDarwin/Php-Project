<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:3'],
            'Address' => ['required', 'string', 'max:255'],
            'sector' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function createCompany(Request $request)
    {
        //$this->validator($request->all())->validate();
        Company::create([
            'companyName' => $request['name'],
            'Address' => $request['address'],
            'password' => $request['password'],
            'sector' => $request['sector'],
        ]);

        $name = $request->name;
        Session::put("name", $name);
        return redirect()->intended('/applications');
    }
    
    //
    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);
        $name = $request->name;
        $password = $request->password;
        // Attempt to log the user in
       if (count(DB::select("select * from companies where companyName = ? and password = ?", [$name, $password])) >= 1) {
            Session::put("name", $name);
            return redirect()->intended('/applications');
        }
        return back()->withErrors(["failed" => "invalid info!"]);
    }
    public function logout()
    {
        Session::forget("name");
        return redirect('/');
    }
}
