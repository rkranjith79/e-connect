<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\Json;
use App\Models\Common\MasterModel;
use Carbon\Carbon;

class profileJathagam extends MasterModel
{
    use HasFactory;
    protected $fillable = [
        "profile_id",
        "rasi_nakshatra_id",
        "lagnam_id",
        "jathagam_id",
        "nakshatra_patham_id",
        "date_of_birth",
        "time_of_birth",
        "place_of_birth",
        "birth_dasa_id",
        "birth_dasa_remaining_year",
        "birth_dasa_remaining_month",
        "birth_dasa_remaining_day",
        "rasi",
        "navamsam",
        "jathagam_file"
    ];

    protected $casts = [
        'rasi' => "object",
        'navamsam' => "object",
    ];

    public function rasi_nakshatra()
    {
        return $this->belongsTo(RasiNakshatra::class)->Translated();
    }

    public function lagnam()
    {
        return $this->belongsTo(Lagnam::class)->Translated();
    }

    public function jathagam()
    {
        return $this->belongsTo(Jathagam::class)->Translated();
    }

    public function nakshatra_patham()
    {
        return $this->belongsTo(NakshatraPatham::class)->Translated();
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['date_of_birth'])->age;
    }

    public function getJathagamFileAttribute()
    {
        return asset("storage/jathagam/" . $this->attributes['jathagam_file']);
    }

    public function getBirthDasaRemainingAttribute()
    {
        return (
            $this->attributes['birth_dasa_remaining_year']
            . " Year(s) " .
            $this->attributes['birth_dasa_remaining_month']
            . " Month(s)  " .
            $this->attributes['birth_dasa_remaining_day']
            . " Day(s) "
        );
    }

    public function getRasiTitleAttribute()
    {
        $return = [];

        $this->rasi =  $this->rasi;

        foreach ($this->rasi as $key => $rasi) {
            $rasi = array_filter((array)($rasi));
            if (!empty($rasi)) {
                $return[$key] = Rasi::whereIn('id',$rasi)?->Translated()?->pluck('title')?->implode(", ");
            }
        }
        return $return;
    }

    public function getnavamsamTitleAttribute()
    {
        $return = [];

        $this->navamsam = array_filter((array) $this->navamsam);


        foreach ($this->navamsam as $key => $navamsam) {
            $navamsam = array_filter((array)($navamsam));
            if (!empty($navamsam))
                $return[$key] = Navamsam::whereIn('id', $navamsam)?->Translated()?->pluck('title')?->implode(", ");
        }
        return $return;
    }
}
