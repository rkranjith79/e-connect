<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::paginate(5);
        return view('admin.work.index', compact('works'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:works'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            Work::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Work Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $work = Work::find($id);
        if ($work) {
            return response()->json([
                'status' => 200,
                'work' => $work
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Work Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:works,title,'.$id.',id'],
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
            $work = Work::find($id);
            $work->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Work Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $work = Work::find($request->work_id);
        if ($work) {
            $work->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Work Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Work Not Found'
            ]);
        }
    }
}
