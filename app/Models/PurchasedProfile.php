<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchasedProfile extends MasterModel
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'profile_id',
        'purchased_profile_id',
        'purchased_plan_id',
        'plan_id',
        'order_id',
        'order_token',
        'expired_at',
        'active',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function purchased_plan()
    {
        return $this->belongsTo(PurchasedPlan::class);
    }

    public function purchased_profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($purchasedProfile) {
            $purchasedProfile->purchased_plan()->update([
                'used_profile_count' => $purchasedProfile->purchased_plan->used_profile_count + 1,
            ]);
        });
    }
}
