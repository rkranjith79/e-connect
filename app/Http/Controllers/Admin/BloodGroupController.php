<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\BloodGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BloodGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public $pageData;

     public function __construct()
     {
         $this->pageData['title'] = "Blood Group";
     }
    public function index()
    {
        $blood_groups = BloodGroup::paginate(5);
        return view('admin.blood_group.index', compact('blood_groups'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:blood_groups'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            BloodGroup::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Blood Group Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $blood_group = BloodGroup::find($id);
        if ($blood_group) {
            return response()->json([
                'status' => 200,
                'blood_group' => $blood_group
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Blood Group Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:blood_groups,title,'.$id.',id'],
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
            $blood_group = BloodGroup::find($id);
            $blood_group->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Blood Group Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $blood_group = BloodGroup::find($request->blood_group_id);
        if ($blood_group) {
            $blood_group->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Blood Group Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Blood Group Not Found'
            ]);
        }
    }
}
