<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Plans';
        $this->pageData['rules']['not_unique'] = true;
        $this->pageData['name'] = 'Plan';
        $this->pageData['view'] = 'admin.plan.index';
        $this->pageData['tables'] = 'plans';
        $this->pageData['prefix_url'] = 'plan';
        $this->modal = new Plan();
    }

    public function index()
    {
        $modal_data = $this->modal::paginate(20);
        $page_data = $this->pageData;

        return view('admin.plan.index', compact(['modal_data', 'page_data']));
    }

    public function store(Request $request)
    {

        $validationFields = [
            'title' => ['required', 'max:255'],
            'expire_in_days' => ['required', 'max:20'],
            'profile_count' => ['required', 'max:11'],
            'price' => ['required', 'max:10'],
            'order_by' => ['required', 'max:11'],
            'attributes' => ['required'],
            'active' => ['nullable'],
        ];

        if (empty($this->pageData['rules']['not_unique'])) {
            $validationFields['title'][] = 'unique:'.$this->pageData['tables'];
        }

        $validationAttributes = ['title' => $this->pageData['name']];

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
                'message' => $this->pageData['title'].' Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $modal_data = $this->modal->find($id);

        if ($modal_data) {
            return response()->json([
                'status' => 200,
                'modal_data' => $modal_data,
            ]);
        } else {
            //create the 404 page also
            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'].' Not found',
            ]);
        }
        //use try catch
        //500 server error Exception must throw
    }

    public function update(Request $request, $id)
    {
        $validationFields = [
            'title' => ['required', 'max:255'],
            'expire_in_days' => ['required', 'max:20'],
            'profile_count' => ['required', 'max:11'],
            'price' => ['required', 'max:10'],
            'order_by' => ['required', 'max:11'],
            'attributes' => ['required'],
            'active' => ['nullable'],
        ];

        if (empty($this->pageData['rules']['not_unique'])) {
            $validationFields['title'][] = 'unique:'.$this->pageData['tables'].',title,'.$id.',id';
        }

        $validationAttributes = ['title' => $this->pageData['name']];

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
            if (isset($input['attributes'])) {
                $input['attributes'] = json_decode($input['attributes'], true);
            }
            $modal_data = $this->modal->find($id);
            $modal_data->update($input);

            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'].' Updated Successfully',
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
                'message' => $this->pageData['title'].' Deleted',
            ]);
        } else {

            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'].' Not Found',
            ]);
        }
    }

    public function deactivate(Request $request)
    {
        // variable declaration should be camelcase.
        $modal_data = $this->modal->find($request->modal_data_id);
        if ($modal_data) {
            $modal_data->update([
                'active' => 'false',
            ]);

            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'].' Deactivated',
            ]);
        } else {

            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'].' Not Found',
            ]);
        }
    }

    public function activate(Request $request)
    {
        // variable declaration should be camelcase.
        $modal_data = $this->modal->find($request->modal_data_id);
        if ($modal_data) {
            $modal_data->update([
                'active' => 'true',
            ]);

            return response()->json([
                'status' => 200,
                'message' => $this->pageData['title'].' Activated',
            ]);
        } else {

            return response()->json([
                'status' => 404,
                'message' => $this->pageData['title'].' Not Found',
            ]);
        }
    }
}
