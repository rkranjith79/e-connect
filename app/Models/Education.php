<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends MasterModel
{
    use HasFactory;

    protected $table = 'educations';

    protected $guarded = [];
}
