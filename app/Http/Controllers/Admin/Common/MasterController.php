<?php

namespace App\Http\Controllers\Admin\Common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

class MasterController extends Controller
{
    public $pageData = [], $modal;



    public function index()
    {
        $page_data = $this->pageData;
        $modal_data =$this->modal->paginate(5);
        return view($this->pageData['view'], compact('modal_data', 'page_data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:'.$this->pageData['tables']],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
           $this->modal->create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => $this->pageData['title'].' Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $modal_data =$this->modal->find($id);
        if ($modal_data) {
            return response()->json([
                'status' => 200,
                'modal_data' => $modal_data
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'].' Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:'.$this->pageData['tables'].',title,'.$id.',id'],
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
            $modal_data =$this->modal->find($id);
            $modal_data->update($input);
            return response()->json([
                'status' => 700,
                'message' => $this->pageData['title'].' Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $modal_data =$this->modal->find($request->modal_data_id);
        if ($modal_data) {
            $modal_data->delete();
            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'].' Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'].' Not Found'
            ]);
        }
    }
}