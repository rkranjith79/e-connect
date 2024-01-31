<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\BirthDasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BirthDasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageData;

    public function __construct()
    {
        $this->pageData['title'] = "Birth Dasas";
    }

    public function index()
    {
        $page_data = $this->pageData;
        $birth_dasas = BirthDasa::paginate(5);
        return view('admin.birth_dasa.index', compact('birth_dasas', 'page_data'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:birth_dasas'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            BirthDasa::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Birth Dasa Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $birth_dasa = BirthDasa::find($id);
        if ($birth_dasa) {
            return response()->json([
                'status' => 200,
                'birth_dasa' => $birth_dasa
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Birth Dasa Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:birth_dasas,title,'.$id.',id'],
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
            $birth_dasa = BirthDasa::find($id);
            $birth_dasa->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Birth Dasa Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $birth_dasa = BirthDasa::find($request->birth_dasa_id);
        if ($birth_dasa) {
            $birth_dasa->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Birth Dasa Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Birth Dasa Not Found'
            ]);
        }
    }
}
