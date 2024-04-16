<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IgnoredProfile extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $table = 'ignored_profiles';
    protected $fillable = [
        'id',
        'profile_id',
        'ignored_profile_id',
        'expired_at',
        'active'
    ];
}
