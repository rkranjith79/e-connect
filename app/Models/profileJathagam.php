<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\Json;

class profileJathagam extends Model
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
        "navamsam"
    ];

    protected $casts = [
        'rasi' => "object",
        'navamsam' => "object",
    ];

}
