<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
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
        return $this->belongsTo(Color::class);
    }

    public function blood_group()
    {
        return $this->belongsTo(BloodGroup::class);
    }
    
    public function body_type()
    {
        return $this->belongsTo(BodyType::class);
    }

    public function weight()
    {
        return $this->belongsTo(Weight::class);
    }

    public function height()
    {
        return $this->belongsTo(Height::class);
    }

    public function physical_status()
    {
        return $this->belongsTo(PhysicalStatus::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function marital_status()
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function registered_by()
    {
        return $this->belongsTo(RegisteredBy::class);
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
        return Jathagam::find($this->expectation_jathagam_id)->pluck('title')->implode(", ");
    }

    public function getExpectationMaritalStatusTitleAttribute()
    {
        return Jathagam::find($this->expectation_marital_status_id)->pluck('title')->implode(", ");
    }

    public function getExpectationWorkPlaceTitleAttribute()
    {
        return Jathagam::find($this->expectation_work_place_id)->pluck('title')->implode(", ");
    }

    
    
}
