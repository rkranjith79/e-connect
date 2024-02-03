<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Common\MasterModel;

class Expectation extends MasterModel
{
    use HasFactory;
    protected $guarded = [];
}
