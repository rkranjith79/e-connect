<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.list', compact('users'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'max:255', 'unique:users'],
            'password' => ['required'],
            'status' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'User Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json([
                'status' => 200,
                'user' => $user
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'User Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'unique:users,email,'.$id.',id'],
            'password' => ['required'],
            'status' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $input = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status == true ? '1' : '0',
            ];
            $user = User::find($id);
            $user->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'User Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user) {
            $user->delete();
            return response()->json([
                'status' => 200,
                'message' => 'User Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'User Not Found'
            ]);
        }
    }
}
