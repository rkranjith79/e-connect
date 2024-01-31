<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\SubCaste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Sub Castes";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $sub_castes = SubCaste::paginate(5);
        return view('admin.sub_caste.index', compact('sub_castes', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:sub_castes'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            SubCaste::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Sub Caste Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $sub_caste = SubCaste::find($id);
        if ($sub_caste) {
            return response()->json([
                'status' => 200,
                'sub_caste' => $sub_caste
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Sub Caste Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:sub_castes,title,'.$id.',id'],
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
            $sub_caste = SubCaste::find($id);
            $sub_caste->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Sub Caste Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $sub_caste = SubCaste::find($request->sub_caste_id);
        if ($sub_caste) {
            $sub_caste->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Sub Caste Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Sub Caste Not Found'
            ]);
        }
    }
}
