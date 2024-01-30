<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('user.member-listing');
    }

    public function jathagam()
    {
        return view('user.jathagam');
    }

    public function search()
    {
        return view('user.profile-search');
    }

    public function profile()
    {
        return view('user.profile');
    }
    

}
