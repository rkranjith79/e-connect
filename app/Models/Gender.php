<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gender extends MasterModel
{
    use HasFactory;

    protected $guarded = [];

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
