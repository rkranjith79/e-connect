<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{
    public $pageData = [];

    public function __construct()
    {
        $this->pageData['title'] = "Informations";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_data = $this->pageData;
        $informations = Information::paginate(10);
        return view('admin.information.list', compact('informations', 'page_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_data = $this->pageData;
        return view('admin.information.add', compact('page_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:informations,id,'.$request->id],
            'code' => ['required', 'max:255', 'unique:informations,id,'.$request->id],
            'content' => ['nullable'],
            'id' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $information = new Information();
            $information->updateorCreate(['id' => $request->id], [
                'title' => $request->title,
                'code' => $request->code,
                'content' => $request->content,
                'attributes' => $information->attributes ?? [],
                'language_tamil' => $request->title ?? ''
            ]);
            return response()->json([
                'success'=>true,
                'status' => 700,
                'message' => 'User Added Successfully',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($information_id)
    {
        $information = Information::findOrFail($information_id);
        $page_data = $this->pageData;
        $form_data = $information->toArray();
        return view('admin.information.add', compact('form_data', 'page_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
    }
}
