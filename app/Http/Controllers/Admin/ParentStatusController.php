<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ParentStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParentStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Parent Statuses";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $parent_statuses = ParentStatus::paginate(5);
        return view('admin.parent_status.index', compact('parent_statuses', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:parent_statuses'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            ParentStatus::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Parent Status Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $parent_status = ParentStatus::find($id);
        if ($parent_status) {
            return response()->json([
                'status' => 200,
                'parent_status' => $parent_status
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Parent Status Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:parent_statuses,title,' . $id . ',id'],
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
            $parent_status = ParentStatus::find($id);
            $parent_status->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Parent Status Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $parent_status = ParentStatus::find($request->parent_status_id);
        if ($parent_status) {
            $parent_status->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Parent Status Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Parent Status Not Found'
            ]);
        }
    }
}
