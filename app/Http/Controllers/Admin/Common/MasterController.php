<?php

namespace App\Http\Controllers\Admin\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class MasterController extends Controller
{
    public $pageData = [], $lookup = [], $modal;


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
        $this->pageData['lookup_data'] = $this->getLookupModalDetails();
        $page_data = $this->pageData;
        $modal_data = $this->modal->paginate(15);
        $lookup_fields = $this->lookup;
        return view($this->pageData['view'], compact('modal_data', 'page_data', 'lookup_fields'));
    }

    public function store(Request $request)
    {
        $validationFields = [
            'title' => ['required', 'max:255', 'unique:' . $this->pageData['tables']],
            'active' => ['nullable'],
        ];

        $validationAttributes = ['title' => $this->pageData['name']];

        foreach ($this->lookup as $value) {
            $validationFields[$value['id']] = ['required'];
            $validationAttributes[$value['id']] = $value['title'];
        }
        //use try catch and DB::transaction  commit and rollback need add
        $validator = Validator::make($request->all(), $validationFields);

        $validator->setAttributeNames($validationAttributes);
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ]);
        } else {
            $input = $validator->getData();
            $this->modal->create($input);
            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'] . ' Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $columns = ['title', 'active','id'];

        foreach ($this->lookup as $value) {
            $columns[] = $value['id'];
        }
        $modal_data = $this->modal->find($id, $columns);

        
        if ($modal_data) {
            return response()->json([
                'status' => 200,
                'modal_data' => $modal_data
            ]);
        } else {
            //create the 404 page also
            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'] . ' Not found'
            ]);
        }
        //use try catch
        //500 server error Exception must throw
    }

    public function update(Request $request, $id)
    {
        $validationFields = [
            'title' => ['required', 'max:255', 'unique:' . $this->pageData['tables'] . ',title,' . $id . ',id'],
            'active' => ['nullable'],
        ];

        $validationAttributes = ['title' => $this->pageData['name']];

        foreach ($this->lookup as $value) {
            $validationFields[$value['id']] = ['required'];
            $validationAttributes[$value['id']] = $value['title'];
        }
        $validator = Validator::make($request->all(), $validationFields);

        $validator->setAttributeNames($validationAttributes);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            //  Code Readable 0 and 1 declare constant and use
            $input = $validator->getData();
            $modal_data = $this->modal->find($id);
            $modal_data->update($input);

            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'] . ' Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        // variable declaration should be camelcase.
        $modal_data = $this->modal->find($request->modal_data_id);
        if ($modal_data) {
            $modal_data->delete();

            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'] . ' Deleted'
            ]);
        } else {

            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'] . ' Not Found'
            ]);
        }
    }

    public function getLookupModalDetails()
    {
        $lookup_data = [];
        foreach ($this->lookup as $item) {
            if (isset($item['model'])) {
                $lookup_data[$item['id']] =  $item['model']->select(['title', 'language_tamil','active', 'id'])->pluck('title', 'id')->toArray();
            }
        }
        return $lookup_data;
    }
}
