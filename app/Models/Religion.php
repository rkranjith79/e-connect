<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Common\MasterModel;

class Religion extends MasterModel
{
    use HasFactory;
    protected $guarded = [];
}
