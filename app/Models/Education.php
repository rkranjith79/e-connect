<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Common\MasterModel;

class Education extends MasterModel
{
    use HasFactory;
    protected $table = 'educations';
    protected $guarded = [];
}
