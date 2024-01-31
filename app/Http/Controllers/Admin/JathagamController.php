<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jathagam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JathagamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Jathagams";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $jathagams = Jathagam::paginate(5);
        return view('admin.jathagam.index', compact('jathagams', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:jathagams'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            Jathagam::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Jathagam Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $jathagam = Jathagam::find($id);
        if ($jathagam) {
            return response()->json([
                'status' => 200,
                'jathagam' => $jathagam
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Jathagam Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:jathagams,title,' . $id . ',id'],
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
            $jathagam = Jathagam::find($id);
            $jathagam->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Jathagam Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $jathagam = Jathagam::find($request->jathagam_id);
        if ($jathagam) {
            $jathagam->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Jathagam Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Jathagam Not Found'
            ]);
        }
    }
}
