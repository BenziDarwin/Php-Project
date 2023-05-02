<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    protected function createJob(Request $request)
    {
        //$this->validator($request->all())->validate();
        Jobs::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'salaryrange' => $request['salaryrange'],
            "sector" => $request['sector'],
            'companyname' => $request['companyname'],
        ]);
        return redirect()->intended('/applications');
    }
}
