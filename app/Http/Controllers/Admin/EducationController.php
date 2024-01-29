<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::paginate(5);
        return view('admin.education.index', compact('educations'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:educations'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            Education::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Education Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $education = Education::find($id);
        if ($education) {
            return response()->json([
                'status' => 200,
                'education' => $education
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Education Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:educations,title,'.$id.',id'],
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
            $education = Education::find($id);
            $education->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Education Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $education = Education::find($request->education_id);
        if ($education) {
            $education->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Education Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Education Not Found'
            ]);
        }
    }
}
