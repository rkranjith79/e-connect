<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InterestedProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $table = 'interested_profiles';

    protected $fillable = [
        'id',
        'profile_id',
        'interested_profile_id',
        'expired_at',
        'active',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function interestedProfile()
    {
        return $this->belongsTo(Profile::class);
    }
}
