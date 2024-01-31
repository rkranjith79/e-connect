<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\WorkPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Work Places";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $work_places = WorkPlace::paginate(5);
        return view('admin.work_place.index', compact('work_places', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:work_places'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            WorkPlace::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Work Place Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $work_place = WorkPlace::find($id);
        if ($work_place) {
            return response()->json([
                'status' => 200,
                'work_place' => $work_place
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Work Place Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:work_places,title,'.$id.',id'],
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
            $work_place = WorkPlace::find($id);
            $work_place->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Work Place Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $work_place = WorkPlace::find($request->work_place_id);
        if ($work_place) {
            $work_place->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Work Place Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Work Place Not Found'
            ]);
        }
    }
}
