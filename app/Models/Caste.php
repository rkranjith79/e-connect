<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Caste extends MasterModel
{
    use HasFactory;

    protected $guarded = [];

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }
}
