<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(5);
        return view('admin.country.index', compact('countries'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:countries'],
            'active' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            Country::create([
                'title' => $request->title,
                'active' => $request->active == true ? '1' : '0',
            ]);
            return response()->json([
                'status' => 700,
                'message' => 'Country Added Successfully',
            ]);
        }
    }

    public function edit($id)
    {
        $country = Country::find($id);
        if ($country) {
            return response()->json([
                'status' => 200,
                'country' => $country
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Country Not found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255', 'unique:countries,title,'.$id.',id'],
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
            $country = Country::find($id);
            $country->update($input);
            return response()->json([
                'status' => 700,
                'message' => 'Country Updated Successfully',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $country = Country::find($request->country_id);
        if ($country) {
            $country->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Country Deleted'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Country Not Found'
            ]);
        }
    }
}
