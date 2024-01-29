<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Caste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $castes = Caste::paginate(5);
        return view('admin.caste.index', compact('castes'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:castes'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            Caste::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Caste Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $caste = Caste::find($id);
        if ($caste) {
            return response()->json([
                'status' => 200,
                'caste' => $caste
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Caste Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:castes,title,'.$id.',id'],
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
            $caste = Caste::find($id);
            $caste->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Caste Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $caste = Caste::find($request->caste_id);
        if ($caste) {
            $caste->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Caste Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Caste Not Found'
            ]);
        }
    }
}
