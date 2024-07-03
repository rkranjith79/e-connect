<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteConfiguration extends MasterModel
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'attributes' => 'object',
    ];
}
