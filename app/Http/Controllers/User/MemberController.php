<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;

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
        $data['grooms'] = Profile::selectColumns()->groom()->get();
        $data['brides'] = Profile::selectColumns()->bride()->get();
        return view('user.index', compact('data'));
    }

    public function listing()
    {
        $data['profiles'] = Profile::selectColumns()->get();
        return view('user.member-listing', compact('data'));
    }

    public function jathagam()
    {
        return view('user.jathagam');
    }

    public function search()
    {
        return view('user.profile-search');
    }

    public function profile($id = 1)
    {
        $data['profile'] = Profile::selectColumns()->find($id);
        return view('user.profile', compact('data'));
    }
    

}
