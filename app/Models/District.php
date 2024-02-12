<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends MasterModel
{
    use HasFactory;
    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
