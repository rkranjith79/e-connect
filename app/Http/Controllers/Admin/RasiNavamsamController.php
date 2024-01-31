<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\RasiNavamsam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RasiNavamsamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Rasi Navamsams";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $rasi_navamsams = RasiNavamsam::paginate(5);
        return view('admin.rasi_navamsam.index', compact('rasi_navamsams', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:rasi_navamsams'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            RasiNavamsam::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Rasi Navamsam Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $rasi_navamsam = RasiNavamsam::find($id);
        if ($rasi_navamsam) {
            return response()->json([
                'status' => 200,
                'rasi_navamsam' => $rasi_navamsam
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Rasi Navamsam Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:rasi_navamsams,title,'.$id.',id'],
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
            $rasi_navamsam = RasiNavamsam::find($id);
            $rasi_navamsam->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Rasi Navamsam Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $rasi_navamsam = RasiNavamsam::find($request->rasi_navamsam_id);
        if ($rasi_navamsam) {
            $rasi_navamsam->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Rasi Navamsam Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Rasi Navamsam Not Found'
            ]);
        }
    }
}
