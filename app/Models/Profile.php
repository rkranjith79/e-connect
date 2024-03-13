<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends MasterModel
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        "language_tamil",
        "blood_group_id",  
        "title",
        "color_id",
        "body_type_id",
        "weight_id",
        "height_id",
        "physical_status_id",
        "registered_by_id",
        "marital_status_id",
        "gender_id",
        "user_id",
        "email",
        "expectation_jathagam_id",
        "expectation_marital_status_id",
        "expectation_work_place_id",
        "expectation_nakshatra",
        "expectation",
        "active",
        "photo_file",
    ];

    protected $casts = [
        'expectation_jathagam_id' => "object",
        'expectation_marital_status_id' => "object",
        'expectation_work_place_id' => "object",

    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class)->Translated();
    }

    public function blood_group()
    {
        return $this->belongsTo(BloodGroup::class)->Translated();
    }
    
    public function body_type()
    {
        return $this->belongsTo(BodyType::class)->Translated();
    }

    public function weight()
    {
        return $this->belongsTo(Weight::class)->Translated();
    }

    public function height()
    {
        return $this->belongsTo(Height::class)->Translated();
    }

    public function physical_status()
    {
        return $this->belongsTo(PhysicalStatus::class)->Translated();
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class)->Translated();
    }

    public function marital_status()
    {
        return $this->belongsTo(MaritalStatus::class)->Translated();
    }

    public function registered_by()
    {
        return $this->belongsTo(RegisteredBy::class)->Translated();
    } 
    
    public function basic()
    {
        return $this->hasOne(ProfileBasic::class);
    }
    
    public function jathagam()
    {
        return $this->hasOne(profileJathagam::class);
    }
    
    public function getModelData($data){
        // Full data get 
    }

    
    public function scopeBride($query)
    {
        return $query->where('gender_id', 2)->where('active', 1);
    }

    public function scopeGroom($query)
    {
        return $query->where('gender_id', 1)->where('active', 1);
    }

    public function scopeSelectColumns($query)
    {
        return $query->with([]);
    }

    public function getPhotoAttribute()
    {
        return !empty($this->attributes['photo_file']) ? 
                asset("storage/photos/".$this->attributes['photo_file'] )
                    : (
                        $this->attributes['gender_id'] == 1 ?  
                            asset('img/profile/groom.jpg') 
                            :
                            asset('img/profile/bride.jpg')
                    );
    }

    public function getExpectationJathagamTitleAttribute()
    {
        if(!empty($this->expectation_jathagam_id))
            return Jathagam::where('id', $this->expectation_jathagam_id)->Translated()?->pluck('title')->implode(", ");
    }

    public function getExpectationMaritalStatusTitleAttribute()
    {
        if(!empty($this->expectation_marital_status_id))
        return Jathagam::where('id', $this->expectation_marital_status_id)->Translated()?->pluck('title')->implode(", ");
    }

    public function getExpectationWorkPlaceTitleAttribute()
    {
        if(!empty($this->expectation_work_place_id))
        return Jathagam::where('id', $this->expectation_work_place_id)->Translated()?->pluck('title')->implode(", ");
    }
    
}
