<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCaste extends MasterModel
{
    use HasFactory;

    protected $guarded = [];

    public function caste()
    {
        return $this->belongsTo(Caste::class);
    }
}
