<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AuthenticatedProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'photo_file' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'jathagam_file' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'title' => ['required', 'max:100'],
            'email' => ['nullable', 'max:100'],
            'gender_id' => ['required'],
            'password' => ['nullable', 'max:200'],
            'marital_status_id' => ['required'],
            'children_details' => ['nullable'],
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
            //'sub_caste' => ['required'],
            'sub_caste_id' => ['nullable'],
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
            'expectation_jathagam_id' => ['required'],
            'expectation_marital_status_id' => ['nullable'],
            'expectation_work_place_id' => ['nullable'],
            'expectation_nakshatra' => ['nullable'],
            'expectation' => ['nullable'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 400,
            'errors' => $validator->errors(),
        ], 400));
    }
}
