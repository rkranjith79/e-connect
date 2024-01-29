<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::paginate(5);
        return view('admin.gender.index', compact('genders'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:genders'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            Gender::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Gender Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $gender = Gender::find($id);
        if ($gender) {
            return response()->json([
                'status' => 200,
                'gender' => $gender
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Gender Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:genders,title,'.$id.',id'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $input = [
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ];
            $gender = Gender::find($id);
            $gender->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Gender Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $gender = Gender::find($request->gender_id);
        if ($gender) {
            $gender->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Gender Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Gender Not Found'
            ]);
        }
    }
}
