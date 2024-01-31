<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Expectation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Expectations";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $expectations = Expectation::paginate(5);
        return view('admin.expectation.index', compact('expectations', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:expectations'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            Expectation::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Expectation Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $expectation = Expectation::find($id);
        if ($expectation) {
            return response()->json([
                'status' => 200,
                'expectation' => $expectation
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Expectation Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:expectations,title,'.$id.',id'],
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
            $expectation = Expectation::find($id);
            $expectation->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Expectation Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $expectation = Expectation::find($request->expectation_id);
        if ($expectation) {
            $expectation->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Expectation Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Expectation Not Found'
            ]);
        }
    }
}
