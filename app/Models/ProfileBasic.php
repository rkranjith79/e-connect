<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileBasic extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
         "profile_id",
         "temple",
         "caste_id",
         "sub_caste_id",
         "education_details",
         "work_id",
         "work_details",
         "monthly_income",
         "phone",
         "whatsapp",
         "address",
         "country_id",
         "state_id",
         "district_id",
         "country_others",
         "state_others",
         "district_others",
         "father_status_id",
         "mother_status_id",
         "social_type_id",
         "father_name",
         "mother_name",
         "native",
         "siblings",
         "asset_value_id",
         "asset_details",
         "seimurai",
         "religion_id",
         "education_id",
         "work_place_id",
         "father_occupation",
         "mother_occupation"];

    public function district()
    {
        return $this->belongsTo(District::class);
    } 

    public function education()
    {
        return $this->belongsTo(Education::class);
    } 

    public function work()
    {
        return $this->belongsTo(Work::class);
    } 

    public function caste()
    {
        return $this->belongsTo(Caste::class);
    } 

    public function sub_caste()
    {
        return $this->belongsTo(SubCaste::class);
    } 
         
}
