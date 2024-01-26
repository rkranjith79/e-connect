<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.list');
    }

    public function create(Request $request)
    {
        return response()->json([
            'status' => 500,
            'message' => 'Product Added Successfully',
        ]);
    }
}
