<?php

namespace App\Http\Controllers\User;

use App\Models\Profile;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AssetsValue;
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
use App\Traits\LookupTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    use LookupTrait;
    use ResetsPasswords;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $record = $this->getlookupData();
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
            'district_id' => ['required'],



            'father_name' => ['required', 'max:100'],
            'mother_name' => ['required', 'max:100'],
            'father_status_id' => ['required'],
            'father_occupation' => ['nullable', 'max:100'],
            'mother_occupation' => ['nullable', 'max:100'],
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
            'time_of_birth' => ['required'],
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

            "expectation_jathagam_id"  => ['required'],
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
        for ($i = 1; $i <= 12; $i++) {
            $rasi[$i] = $request->{'rasi_' . $i};
            $navamsam[$i] = $request->{'navamsam_' . $i};
        };

        $photo_file_path = $jathagam_file_path = "";

        if ($request->hasFile('photo_file')) {
            $file = $request->file('photo_file');
            $photo_file_path = $file->getClientOriginalName();
            $file->storeAs('public/photos', $photo_file_path);
        }

        if ($request->hasFile('jathagam_file')) {
            $file = $request->file('jathagam_file');
            $jathagam_file_path = $file->getClientOriginalName();
            $file->storeAs('public/jathagam', $jathagam_file_path);
        }

        $user = User::create([
            'name' => $request->title,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $profile = Profile::create([
            "language_tamil" => $request->title,
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
            "birth_dasa_id" => $request->birth_dasa_id,
            "birth_dasa_remaining_year" => $request->birth_dasa_remaining_year,
            "birth_dasa_remaining_month" => $request->birth_dasa_remaining_month,
            "birth_dasa_remaining_day" => $request->birth_dasa_remaining_day,
            "rasi" => $rasi,
            "navamsam" => $navamsam,
            "jathagam_file" => $jathagam_file_path
        ]);

        return response()->json([
            'status' => 200,
            'message' => "Profile Created Successfully",
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
        $profile = !empty($profile->id ?? '') ? $profile : Auth::user()->profile;
        if (!empty($profile)) {
            $profileBasic = ProfileBasic::where('profile_id', $profile->id)->first();
            $profileJathagam = profileJathagam::where('profile_id', $profile->id)->first();
            $record = $this->getlookupData();
            return view('user.profile.edit', compact(['profile', 'profileBasic', 'profileJathagam', 'record']));
        } else {
            return view('pages.404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'photo_file' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'jathagam_file' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'title' => ['required', 'max:100'],
            'gender_id' => ['required'],
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
            'district_id' => ['required'],

            'father_name' => ['required', 'max:100'],
            'mother_name' => ['required', 'max:100'],
            'father_status_id' => ['required'],
            'father_occupation' => ['nullable', 'max:100'],
            'mother_occupation' => ['nullable', 'max:100'],
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
            'time_of_birth' => ['required'],
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

            "expectation_jathagam_id"  => ['required'],
            "expectation_marital_status_id"  => ['nullable'],
            "expectation_work_place_id"  => ['nullable'],
            "expectation_nakshatra"  => ['nullable'],
            "expectation"  => ['nullable'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $rasi = [];
            $navamsam = [];
            for ($i = 1; $i <= 12; $i++) {
                $rasi[$i] = $request->{'rasi_' . $i};
                $navamsam[$i] = $request->{'navamsam_' . $i};
            };

            $photo_file_path = $jathagam_file_path = "";
            $profile = Profile::findOrFail($request->id);
            $profileBasic = ProfileBasic::where('profile_id', $profile->id)->first();
            $profileJathagam = profileJathagam::where('profile_id', $profile->id)->first();

            $profile->update([
                "language_tamil" => $request->title,
                "title" => $request->title,
                "color_id" => $request->color_id,
                "body_type_id" => $request->body_type_id,
                "blood_group_id" => $request->blood_group_id,
                "weight_id" => $request->weight_id,
                "height_id" => $request->height_id,
                "physical_status_id" => $request->physical_status_id,
                "registered_by_id" => $request->registered_by_id,
                "marital_status_id" => $request->marital_status_id,
                "gender_id" => $request->gender_id,
                "expectation_jathagam_id" => $request->expectation_jathagam_id,
                "expectation_marital_status_id" => $request->expectation_marital_status_id,
                "expectation_work_place_id" => $request->expectation_work_place_id,
                "expectation_nakshatra" => $request->expectation_nakshatra,
                "expectation" => $request->expectation,
                "active" => $request->active == true ? '1' : '0',
            ]);

            if ($request->hasFile('photo_file')) {
                if ($profile->photo_file) {
                    Storage::delete('public/photos/' . $profile->photo_file);
                }
                $file = $request->file('photo_file');
                $photo_file_path = $file->getClientOriginalName();
                $file->storeAs('public/photos', $photo_file_path);
                $profile->update([
                    "photo_file" => $photo_file_path,
                ]);
            }

            $profileBasic->update([
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

            $profileJathagam->update([
                "rasi_nakshatra_id" => $request->rasi_nakshatra_id,
                "lagnam_id" => $request->lagnam_id,
                "jathagam_id" => $request->jathagam_id,
                "nakshatra_patham_id" => $request->nakshatra_patham_id,
                "date_of_birth" => $request->date_of_birth,
                "time_of_birth" => $request->time_of_birth,
                "place_of_birth" => $request->place_of_birth,
                "birth_dasa_id" => $request->birth_dasa_id,
                "birth_dasa_remaining_year" => $request->birth_dasa_remaining_year,
                "birth_dasa_remaining_month" => $request->birth_dasa_remaining_month,
                "birth_dasa_remaining_day" => $request->birth_dasa_remaining_day,
                "rasi" => $rasi,
                "navamsam" => $navamsam,
            ]);

            if ($request->hasFile('jathagam_file')) {
                if ($profileJathagam->jathagam_file) {
                    Storage::delete('public/jathagam/' . $profileJathagam->jathagam_file);
                }
                $file = $request->file('jathagam_file');
                $jathagam_file_path = $file->getClientOriginalName();
                $file->storeAs('public/jathagam', $jathagam_file_path);
                $profileJathagam->update([
                    "jathagam_file" => $jathagam_file_path
                ]);
            }

            return response()->json([
                'status' => 200,
                'message' => "Profile Updated Successfully",
            ]);
        }
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

    public function changePassword()
    {
        $email = Auth::user()->email;
        return view('user.profile.change_password', compact('email'));
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.change_password')->withErrors($validator)->withInput();
        }
        $user = Auth::user();
        $email = Auth::user()->email;
        if ($email == $request->email) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('user.change_password')->with('success', 'Password changed successfully.');
        } else {
            return redirect()->route('user.change_password')->with('error', 'Email Password Mismatch.');
        }
    }
}
