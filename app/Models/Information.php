<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends MasterModel
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $table = 'informations';

    protected $casts = [
        'attributes' => "object"
    ];
    
}
