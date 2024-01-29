<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::paginate(5);
        return view('admin.state.index', compact('states'));
    }

    public function create(Request $request)
    {
        $attrs = [
            'title' => 'State field is required'
        ];
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:states'],
            'active' => ['nullable'],
        ],$attrs);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            State::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'State Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $state = State::find($id);
        if ($state) {
            return response()->json([
                'status' => 200,
                'state' => $state
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'State Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:states,title,'.$id.',id'],
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
            $state = State::find($id);
            $state->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'State Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $state = State::find($request->state_id);
        if ($state) {
            $state->delete();
            return response()->json([
                'status' => 200,
                'message' => 'State Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'State Not Found'
            ]);
        }
    }
}
