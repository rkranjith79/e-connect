<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Common\MasterModel;

class Caste extends MasterModel
{
    use HasFactory;
    protected $guarded = [];

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }
}
