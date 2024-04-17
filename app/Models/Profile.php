<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        'code'
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

    public function interestedProfile()
    {
        return $this->hasMany(InterestedProfile::class, 'interested_profile_id', 'id')?->where('active', 1); 
    }

    public function ignoredProfile()
    {
        return $this->hasMany(IgnoredProfile::class, 'ignored_profile_id', 'id')?->where('active',1);
    }


    public function myInterestedProfiles()
    {
        return $this->hasMany(InterestedProfile::class, 'profile_id', 'id')?->where('active',1);
    }

    public function myIgnoredProfiles()
    {
        return $this->hasMany(IgnoredProfile::class, 'profile_id', 'id')?->where('active',1);
    }


    public function scopeWomitIgnored($query)
    {
        return $query->whereHas(
            "ignoredProfile",
            function ($q)  {
                $q->where('profile_id', auth()->user()->profile->id);
            } , "=", 0
        );
    }
    
    public function getModelData($data)
    {
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

    public function scopeHashFind($query, $id, $uuid)
    {
        return $query->where('id', $id)->where('uuid', $uuid)->firstOrFail();
    }

    public function scopeSelectColumns($query)
    {
        return $query->with([]);
    }

    public function getPhotoAttribute()
    {
        return !empty($this->attributes['photo_file']) ?
            asset("storage/photos/" . $this->attributes['photo_file'])
            : (
                $this->attributes['gender_id'] == 1 ?
                asset('img/profile/groom.jpg')
                :
                asset('img/profile/bride.jpg')
            );
    }

    public function getNameDisplayAttribute()
    {
        return $this->attributes['title'];//strlen($this->attributes['title']) > 20 ? substr($this->attributes['title'],   0, 20) . "...." : $this->attributes['title'];
    }

    public function getInterestedAttribute()
    {
        $profile_id = auth()->user()->profile->id;

        return InterestedProfile::where('interested_profile_id', $this->attributes['id'])
        ->where('profile_id', $profile_id)
        ->where('active', 1)
        ->where('expired_at', '>',  Carbon::now())
        ->count() ? true : false;
    }

    public function getIgnoredAttribute()
    {
        $profile_id = auth()->user()->profile->id;

        return IgnoredProfile::where('ignored_profile_id', $this->attributes['id'])
        ->where('profile_id', $profile_id)
        ->where('active', 1)
        ->where('expired_at', '>',  Carbon::now())
        ->count() ? true : false;
    }

    public function getExpectationJathagamTitleAttribute()
    {
        if (!empty($this->expectation_jathagam_id))
            return Jathagam::where('id', $this->expectation_jathagam_id)->Translated()?->pluck('title')->implode(", ");
    }

    public function getExpectationMaritalStatusTitleAttribute()
    {
        if (!empty($this->expectation_marital_status_id))
            return Jathagam::where('id', $this->expectation_marital_status_id)->Translated()?->pluck('title')->implode(", ");
    }

    public function getExpectationWorkPlaceTitleAttribute()
    {
        if (!empty($this->expectation_work_place_id))
            return Jathagam::where('id', $this->expectation_work_place_id)->Translated()?->pluck('title')->implode(", ");
    }

    public function getWhatsappDataAttribute() {
        return http_build_query(['text'=> trans('fields.code')  .":". ( $this->code ?? '-' ). "\n".
        trans('fields.name')  .":".  ( $this->title ?? '-' ). "\n".
        trans('fields.age')  .":". ( $this->jathagam->age ?? '-' ). "\n".
        trans('fields.district')  .":". ( $this->basic->district->title ?? '-' ). "\n".
        trans('fields.work')   .":". ( $this->basic->work->title ?? '-' ). "\n".
        trans('fields.monthly_income')  .":". ( $this->basic->monthly_income ?? '-' ). "\n".
        trans('fields.rasi_nakshatra')  .":". ( $this->jathagam->rasi_nakshatra->title ?? '-' ). "\n".
        trans('fields.jathagam')  .":". ( $this->jathagam->jathagam->title ?? '-' ). "\n"]);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($profile) {
            $profile->basic->delete();
            $profile->jathagam->delete();
        });

        static::creating(function ($profile) {
            $lastProfile = static::latest()->first();
            $lastCode = $lastProfile ? $lastProfile->code : null;
            $profile->code = 'EC' . str_pad(intval(substr($lastCode, 2)) + 1, 4, '0', STR_PAD_LEFT);
            $profile->uuid = (string) Str::uuid();
        });
    }
}
