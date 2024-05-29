<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchasedPlan extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "purchased_plans";

    protected $fillable = [
        "profile_id",
        "plan_id",
        "used_profile_count",
        "order",
        "expired_at",
        "active"
    ];
    protected $casts = [
        'order' => "object"
    ];




    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
