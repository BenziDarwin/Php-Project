<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Storage;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use App\Http\Controllers\View;
use Illuminate\View\View as ViewView;


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
        //$this->validator($request->all())->validate();
        //ddd($request);
        Users::create([
            'name' => $request['name'],
            'course' => $request['course'],
            'stdNo' => $request['studentNo'],
            'password' => $request['password'],
        ]);
        Session::put("name", $request["name"]);
        return redirect()->intended('/jobs');
    }
    // Store the image data in the database
    public function update(Request $request, $id)
    {
        $user = Users::find($id);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = $image->getClientOriginalName();
            $path = $request->file('profile_image')->storeAs('profile_images', $filename, 'public');
            $user->profile_image = '/storage/' . $path;
            $user->save();
        }

        // dd($user);



        return redirect('/profile')->with('success', 'Profile image updated successfully!');
    }

    // public function profile()
    // {
    //     $userProfileImage = auth()->user()->profile_image;
       
    //     return view('user.profile', compact('userProfileImage'));
    // }
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
