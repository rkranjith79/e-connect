<?php

namespace App\Http\Controllers\User;

use App\Models\Profile;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Color;
use App\Models\BodyType;
use App\Models\Weight;
use App\Models\Height;
use App\Models\PhysicalStatus;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\RegisteredBy;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //dd((new gender)::published()->pluck('title','id'));   


        $record = [
            "genders" => $this->getPublishedData(Gender::class),
            "marital_statuses" => $this->getPublishedData(MaritalStatus::class),
            "registered_bies" => $this->getPublishedData(RegisteredBy::class),
            "colors" => $this->getPublishedData(Color::class),
            "body_types" => $this->getPublishedData(BodyType::class),
            "physical_statuses" => $this->getPublishedData(PhysicalStatus::class),
            "weights" => $this->getPublishedData(Weight::class),
            "heights" => $this->getPublishedData(Height::class),
        ];
        return view('user.register', compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Use Request Validation 
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:100'],
            'email' => ['required', 'unique:users', 'max:100'],
            'gender_id' => ['required'],
            'password' => ['required', 'max:200'],
            'marital_status_id' => ['required'],
            'registered_by_id' => ['required'],
            'color_id' => ['required'],
            'body_type_id' => ['required'],
            'physical_status_id' => ['required'],
            'weight_id' => ['required'],
            'height_id' => ['required'],
            /*
            'special_category_details' => ['required', 200],
            'blood_group_id' => ['required'],
            'caste_id' => ['required'],
            'sub_caste_id' => ['required'],
            'sub_caste_others'=> ['required', 200],
            'degree_id' => ['required'],
            'work_id' => ['required'],
            'country_id' => ['required'],
            'state_id' => ['required'],
            'education_id' => ['required'],
            'district_id' => ['required'],
            'work_place_id' => ['required'],
                       
            'social_type_id' => ['required'],

            'father_status_id' => ['required'],
            'father_occupation' => ['required', 'max:100'],
            'education_details' => ['required', 'max:100'],
            'mother_occupation' => ['required', 'max:100'],
            'mother_status_id' => ['required'],
            'social_type_id' => ['required'],
            'asset_value_id' => ['required'],
            'expectation_jathagam_id' => ['required'],
            'expectation_marital_status_id' => ['required'],
            'rasi_nakshatra_id' => ['required'],
            'lagnam_id' => ['required'],
            'jathagam_id' => ['required'],
            'nakshatra_patham_id' => ['required'],
            'expectation_work_place_id' => ['required'],
            'temple' => ['required', 'max:100'],
            'education_details' => ['required', 'max:100'],
            'education_others' => ['required', 'max:100'],
            'work_others' => ['required', 'max:100'],
            
            'work_details' => ['required', 'max:100'],
            'monthly_income' => ['required', 'max:100'],
            'whatsapp' => ['required', 'max:100'],
            'phone' => ['required', 'max:100'],
            'address' => ['required', 'max:1000'],
            'country_others' => ['required', 'max:100'],
            'state_others' => ['required', 'max:100'],
            'district_others' => ['required', 'max:100'],
            'father_name' => ['required', 'max:100'],
            'mother_name' => ['required', 'max:100'],
            'native' => ['required', 'max:100'],
            'siblings' => ['required', 'max:100'],
            'asset_details' => ['required', 'max:1000'],
            'seimurai' => ['required', 'max:1000'],
            'expectation_nakshatra' => ['required', 'max:1000'],
            'expectation' => ['required', 'max:1000'],
            'place_to_birth' => ['required', 'max:200'],
            'birth_dasa' => ['required', 'max:200'],
            'dasa_remaining' => ['required'],

            
            'date_of_birth' => ['required', 'max:200'],
            'dob_date' => ['required', 'max:200'],

            'dob_month' => ['required', 'max:200'],

            'dob_year' => ['required', 'max:200'],

            'tob_hour' => ['required', 'max:200'],
            'tob_min' => ['required', 'max:200'],
            'tob_m' => ['required', 'max:200'],


            
            
            
            'time_of_birth' => ['required', 'max:200'],
            'birth_dasa_remaining_year' => ['required', 'max:200'],
            'birth_dasa_remaining_month' => ['required', 'max:200'],
            'birth_dasa_remaining_day' => ['required', 'max:200'],
            'children_details' => ['required', 'max:200'],
            'marital_details' => ['required', 'max:200'],
            'active' => ['nullable'],
            */
        ]);
        //No need this

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }

        $user = User::create([
            'name' => $request->title,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Profile::create([
            "title" => $request->title,
            "email" => $request->email,
            "color_id" => $request->color_id,
            "body_type_id" => $request->body_type_id,
            "blood_group_id" => $request->blood_group_id,
            "weight_id" => $request->weight_id,
            "height_id" => $request->height_id,
            "physical_status_id" => $request->physical_status_id,
            "registered_by_id" => $request->registered_by_id,
            "marital_status_id" => $request->marital_status_id,
            "gender_id" => $request->gender_id,
            "user_id" => $user->id,
            "active" => $request->active == true ? '1' : '0',
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
    function getPublishedData($model)
    {
        return $model::published()->pluck('title', 'id')->toArray();
    }
}
