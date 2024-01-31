<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lagnam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LagnamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Lagnams";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $lagnams = Lagnam::paginate(5);
        return view('admin.lagnam.index', compact('lagnams', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:lagnams'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            Lagnam::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Lagnam Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $lagnam = Lagnam::find($id);
        if ($lagnam) {
            return response()->json([
                'status' => 200,
                'lagnam' => $lagnam
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Lagnam Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:lagnams,title,' . $id . ',id'],
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
            $lagnam = Lagnam::find($id);
            $lagnam->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Lagnam Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $lagnam = Lagnam::find($request->lagnam_id);
        if ($lagnam) {
            $lagnam->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Lagnam Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Lagnam Not Found'
            ]);
        }
    }
}
