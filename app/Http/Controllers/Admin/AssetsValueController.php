<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\AssetsValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AssetsValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets_values = AssetsValue::paginate(5);
        return view('admin.assets_value.index', compact('assets_values'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:assets_values'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            AssetsValue::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Assets Value Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $assets_value = AssetsValue::find($id);
        if ($assets_value) {
            return response()->json([
                'status' => 200,
                'assets_value' => $assets_value
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Assets Value Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:assets_values,title,'.$id.',id'],
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
            $assets_value = AssetsValue::find($id);
            $assets_value->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Assets Value Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $assets_value = AssetsValue::find($request->assets_value_id);
        if ($assets_value) {
            $assets_value->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Assets Value Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Assets Value Not Found'
            ]);
        }
    }
}
