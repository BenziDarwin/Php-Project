<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    protected function createApplication(Request $request)
    {
        //$this->validator($request->all())->validate();
        Application::create([
            'applierName' => $request['applierName'],
            'companyName' => $request['companyName'],
            'resume' => $request['resume'],
        ]);
        return redirect()->intended('/jobs');
    }
}
