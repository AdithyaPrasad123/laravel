<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function view_login()
    {
        return view('login');
    }
    public function do_login(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'email',
            'dob'=>'date',
        ]);
        Register::Create([
            'name'=>$request->name,
            'email'=>$request->email,
            'dob'=>$request->dob,
        ]);
        return redirect()->route('view.home')->with('success',"Login Successfully");
    }
    public function view_home()
    {
        return view('home');
    }
}
