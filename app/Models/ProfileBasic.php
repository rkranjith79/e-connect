<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileBasic extends MasterModel
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


    public function education()
    {
        return $this->belongsTo(Education::class)->Translated();
    } 

    public function work()
    {
        return $this->belongsTo(Work::class)->Translated();
    } 

    public function caste()
    {
        return $this->belongsTo(Caste::class)->Translated();
    } 

    public function sub_caste()
    {
        return $this->belongsTo(SubCaste::class)->Translated();
    }
    
    public function work_place()
    {
        return $this->belongsTo(WorkPlace::class)->Translated();
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class)->Translated();
    }
    
    public function state()
    {
        return $this->belongsTo(State::class)->Translated();
    }
    
    public function district()
    {
        return $this->belongsTo(District::class)->Translated();
    }
    
    public function father_status()
    {
        return $this->belongsTo(ParentStatus::class)->Translated();
    }

    public function mother_status()
    {
        return $this->belongsTo(ParentStatus::class)->Translated();
    }
    
    public function social_type()
    {
        return $this->belongsTo(SocialType::class)->Translated();
    }
    
    public function asset_value()
    {
        return $this->belongsTo(AssetsValue::class)->Translated();
    }   

}
