<?php

namespace App\Http\Controllers\User;

use App\Models\Profile;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Color;
use App\Models\BodyType;
use App\Models\Caste;
use App\Models\Country;
use App\Models\District;
use App\Models\Education;
use App\Models\Weight;
use App\Models\Height;
use App\Models\PhysicalStatus;
use App\Models\Gender;
use App\Models\Jathagam;
use App\Models\Lagnam;
use App\Models\MaritalStatus;
use App\Models\NakshatraPatham;
use App\Models\Navamsam;
use App\Models\ParentStatus;
use App\Models\ProfileBasic;
use App\Models\profileJathagam;
use App\Models\Rasi;
use App\Models\RasiNakshatra;
use App\Models\RegisteredBy;
use App\Models\Religion;
use App\Models\SocialType;
use App\Models\State;
use App\Models\SubCaste;
use App\Models\Work;
use App\Models\WorkPlace;

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
            "educations" => $this->getPublishedData(Education::class),
            "works" => $this->getPublishedData(Work::class),
            "work_places" => $this->getPublishedData(WorkPlace::class),
            "countries" => $this->getPublishedData(Country::class),
            "states" => $this->getPublishedData(State::class),
            "districts" => $this->getPublishedData(District::class),
            "parant_status" => $this->getPublishedData(ParentStatus::class),
            "social_types" => $this->getPublishedData(SocialType::class),
            "blood_groups" => $this->getPublishedData(BloodGroup::class),
            "castes" => $this->getPublishedData(Caste::class),
            "sub_castes" => $this->getPublishedData(SubCaste::class),
            "religions" => $this->getPublishedData(Religion::class),
            "rasi_nakshatras" => $this->getPublishedData(RasiNakshatra::class),
            "lagnams" => $this->getPublishedData(Lagnam::class),
            "jathagams" => $this->getPublishedData(Jathagam::class),
            "nakshatra_pathams" => $this->getPublishedData(NakshatraPatham::class),
            "rasis" => $this->getPublishedData(Rasi::class),
            "navamsams" => $this->getPublishedData(Navamsam::class),

            
            
        ];
        return view('user.registration.index', compact('record'));
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
        //dd($request->time_of_birth);
        $validator = Validator::make($request->all(), [
            'photo_file' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'], 
            'jathagam_file' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
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
            'blood_group_id' => ['required'],
            
            
            'temple' => ['required', 'max:100'],
            'religion_id' => ['required'],
            'caste_id' => ['required'],
            'sub_caste_id' => ['required'],
            'work_id' => ['required'],
            'education_details' => ['required', 'max:100'],
            
            'work_place_id' => ['required'],
                       
            'work_details' => ['required', 'max:100'],
            'whatsapp' => ['required', 'max:100'],
            'phone' => ['required', 'max:100'],
            'address' => ['required', 'max:1000'],
            'monthly_income' => ['required', 'max:100'],


            'country_id' => ['required'],
            'state_id' => ['required'],
            'education_id' => ['required'],
            'country_others' => ['required', 'max:100'],
            'state_others' => ['required', 'max:100'],
            'district_id' => ['required'],
            'district_others' => ['required', 'max:100'],



            'father_name' => ['required', 'max:100'],
            'mother_name' => ['required', 'max:100'],
            'father_status_id' => ['required'],
            'father_occupation' => ['required', 'max:100'],
            'mother_occupation' => ['required', 'max:100'],
            'mother_status_id' => ['required'],
            'siblings' => ['required', 'max:100'],


            'social_type_id' => ['required'],
            'native' => ['required', 'max:100'],

            'asset_value_id' => ['required'],
            'asset_details' => ['required', 'max:1000'],
            'seimurai' => ['required', 'max:1000'],
            
            'rasi_nakshatra_id' => ['required'],
            'lagnam_id' => ['required'],
            'jathagam_id' => ['required'],
            'nakshatra_patham_id' => ['required'],
            'date_of_birth' => ['required', 'date'],
            'time_of_birth' => ['required', 'date_format:h:i'],
            'place_of_birth' => ['required', 'max:200'],
            
            'birth_dasa_remaining_year' => ['required', 'max:200'],
            'birth_dasa_remaining_month' => ['required', 'max:200'],
            'birth_dasa_remaining_day' => ['required', 'max:200'],
            'birth_dasa_id' => ['required'],
            'rasi_1' => ['nullable'],
            'rasi_2' => ['nullable'],
            'rasi_3' => ['nullable'],
            'rasi_4' => ['nullable'],
            'rasi_5' => ['nullable'],
            'rasi_6' => ['nullable'],
            'rasi_7' => ['nullable'],
            'rasi_8' => ['nullable'],
            'rasi_9' => ['nullable'],
            'rasi_10' => ['nullable'],
            'rasi_11' => ['nullable'],
            'rasi_12' => ['nullable'],
            'navamsam_1' => ['nullable'],
            'navamsam_2' => ['nullable'],
            'navamsam_3' => ['nullable'],
            'navamsam_4' => ['nullable'],
            'navamsam_5' => ['nullable'],
            'navamsam_6' => ['nullable'],
            'navamsam_7' => ['nullable'],
            'navamsam_8' => ['nullable'],
            'navamsam_9' => ['nullable'],
            'navamsam_10' => ['nullable'],
            'navamsam_11' => ['nullable'],
            'navamsam_12' => ['nullable'],

            "expectation_jathagam_id"  => ['nullable'],
            "expectation_marital_status_id"  => ['nullable'],
            "expectation_work_place_id"  => ['nullable'],
            "expectation_nakshatra"  => ['nullable'],
            "expectation"  => ['nullable'],
    
        ]);
        
        
        
        //No need this
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        
        $rasi = [];
        $navamsam = [];
        for($i=1; $i<=12; $i++) {
            $rasi[$i] = $request->{'rasi_'.$i};
            $navamsam[$i] = $request->{'navamsam_'.$i};
        };

        $photo_file_path = $jathagam_file_path = "";
        
        if( $request->hasFile('photo_file') ) {
            $file = $request->file('photo_file');
            $photo_file_path = $file->store('photos');  
        }

        if( $request->hasFile('jathagam_file') ) {
            $file = $request->file('jathagam_file');
            $jathagam_file_path = $file->store('jathagam');
        }

        $user = User::create([
            'name' => $request->title,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $profile = Profile::create([
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
            "expectation_jathagam_id" => $request->expectation_jathagam_id,
            "expectation_marital_status_id" => $request->expectation_marital_status_id,
            "expectation_work_place_id" => $request->expectation_work_place_id,
            "expectation_nakshatra" => $request->expectation_nakshatra,
            "expectation" => $request->expectation,
            "photo_file" => $photo_file_path,
            "active" => $request->active == true ? '1' : '0',
        ]);

        ProfileBasic::create([
            "profile_id" => $profile->id,
            "temple" => $request->temple,
            "caste_id" => $request->caste_id,
            "sub_caste_id" => $request->sub_caste_id,
            "education_details" => $request->education_details,
            "work_id" => $request->work_id,
            "work_details" => $request->work_details,
            "monthly_income" => $request->monthly_income,
            "phone" => $request->phone,
            "whatsapp" => $request->whatsapp,
            "address" => $request->address,
            "country_id" => $request->country_id,
            "state_id" => $request->state_id,
            "district_id" => $request->district_id,
            "country_others" => $request->country_others,
            "state_others" => $request->state_others,
            "district_others" => $request->district_others,
            "father_status_id" => $request->father_status_id,
            "mother_status_id" => $request->mother_status_id,
            "social_type_id" => $request->social_type_id,
            "father_name" => $request->father_name,
            "mother_name" => $request->mother_name,
            "native" => $request->native,
            "siblings" => $request->siblings,
            "asset_value_id" => $request->asset_value_id,
            "asset_details" => $request->asset_details,
            "seimurai" => $request->seimurai,
            "religion_id" => $request->religion_id,
            "education_id" => $request->education_id,
            "work_place_id" => $request->work_place_id,
            "father_occupation" => $request->father_occupation,
            "mother_occupation" => $request->mother_occupation
        ]);

        profileJathagam::create([
            "profile_id" => $profile->id,
            "rasi_nakshatra_id" => $request->rasi_nakshatra_id,
            "lagnam_id" => $request->lagnam_id,
            "jathagam_id" => $request->jathagam_id,
            "nakshatra_patham_id" => $request->nakshatra_patham_id,
            "date_of_birth" => $request->date_of_birth,
            "time_of_birth" => $request->time_of_birth,
            "place_of_birth" => $request->place_of_birth,
            "birth_dasa_id" => $request->birth_dasa,
            "birth_dasa_remaining_year" => $request->birth_dasa_remaining_year,
            "birth_dasa_remaining_month" => $request->birth_dasa_remaining_month,
            "birth_dasa_remaining_day" => $request->birth_dasa_remaining_day,
            "rasi" => $rasi,
            "navamsam" => $navamsam,
            "jathagam_file" => $jathagam_file_path
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
