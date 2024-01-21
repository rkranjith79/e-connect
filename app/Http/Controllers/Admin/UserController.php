<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('layouts.includes.admin.users.list');
    }

    public function create()
    {
        return view('layouts.includes.admin.users.create');
    }
}
