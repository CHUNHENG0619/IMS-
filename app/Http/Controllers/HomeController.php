<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Write Your Code..
     *
     * @return string
    */
    public function adminHome(Request $request)
    {
        return view('admin.adminHome');
    }

    public function staffHome(Request $request)
    {
        return view('staff.staffHome');
    }

    public function internHome(Request $request)
    {
        return view('intern.internHome');
    }
}