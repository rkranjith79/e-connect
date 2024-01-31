<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\RasiNakshatra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RasiNakshatraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Rasi Nakshatras";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $rasi_nakshatras = RasiNakshatra::paginate(5);
        return view('admin.rasi_nakshatra.index', compact('rasi_nakshatras', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:rasi_nakshatras'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            RasiNakshatra::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Rasi Nakshatra Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $rasi_nakshatra = RasiNakshatra::find($id);
        if ($rasi_nakshatra) {
            return response()->json([
                'status' => 200,
                'rasi_nakshatra' => $rasi_nakshatra
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Rasi Nakshatra Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:rasi_nakshatras,title,' . $id . ',id'],
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
            $rasi_nakshatra = RasiNakshatra::find($id);
            $rasi_nakshatra->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Rasi Nakshatra Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $rasi_nakshatra = RasiNakshatra::find($request->rasi_nakshatra_id);
        if ($rasi_nakshatra) {
            $rasi_nakshatra->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Rasi Nakshatra Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Rasi Nakshatra Not Found'
            ]);
        }
    }
}
