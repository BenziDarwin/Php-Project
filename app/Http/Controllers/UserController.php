<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:3'],
            'course' => ['required', 'string', 'max:255'],
            'stdNo' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function createUser(Request $request)
    {
        //$this->validator($request->all())->validate();
        Users::create([
            'name' => $request['name'],
            'course' => $request['course'],
            'password' => $request['password'],
            'stdNo' => $request['studentNo'],
        ]);

        $name = $request->name;
        Session::put("name", $name);
        return redirect()->intended('/jobs');
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
       if (count(DB::select("select * from users where name = ? and password = ?", [$name, $password])) >= 1) {
            Session::put("name", $name);
            return redirect()->intended('/jobs');
        }
        return back()->withErrors(["failed" => "invalid info!"]);
    }
    public function logout()
    {
        Session::forget("name");
        return redirect('/');
    }
}
