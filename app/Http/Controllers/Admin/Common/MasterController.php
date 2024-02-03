<?php

namespace App\Http\Controllers\Admin\Common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class MasterController extends Controller
{
    public $pageData = [], $modal;


    // public function dynamicRoute($modalName)
    // {
    //     $this->pageData['title'] = Str::plural($modalName);
    //     $this->pageData['name'] = Str::singular($modalName);
    //     $this->pageData['view'] = "admin.common_master.index";
    //     $this->pageData['tables'] = Str::plural($modalName);;
    //     $this->pageData['prefix_url'] = route("admin.dynamic_master.index");
    //     $this->modal =  app()->make("\App\Models\\$modalName");
    //     return $this->index();
    // }

    public function index()
    {
        $page_data = $this->pageData;
        $modal_data =$this->modal->paginate(5);
        return view($this->pageData['view'], compact('modal_data', 'page_data'));
    }

    public function store(Request $request)
    {
        //use try catch and DB::transaction  commit and rollback need add
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
            //create the 404 page also
            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'].' Not found'
            ]);
        }
        //use try catch
        //500 server error Exception must throw
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
          //  Code Readable 0 and 1 declare constant and use
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
        // variable declaration should be camelcase.
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
