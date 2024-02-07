<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Common\MasterModel;

class Gender extends MasterModel
{
    use HasFactory;
    
    protected $guarded = [];

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

}
