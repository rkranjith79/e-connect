<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\SocialType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SocialTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social_types = SocialType::paginate(5);
        return view('admin.social_type.index', compact('social_types'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:social_types'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            SocialType::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Social Type Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $social_type = SocialType::find($id);
        if ($social_type) {
            return response()->json([
                'status' => 200,
                'social_type' => $social_type
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Social Type Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:social_types,title,'.$id.',id'],
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
            $social_type = SocialType::find($id);
            $social_type->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Social Type Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $social_type = SocialType::find($request->social_type_id);
        if ($social_type) {
            $social_type->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Social Type Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Social Type Not Found'
            ]);
        }
    }
}
