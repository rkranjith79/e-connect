<?php

namespace App\Models;

use App\Models\Common\MasterModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends MasterModel
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $table = 'informations';

    protected $fillable = [
        'id', 'title', 'code', 'attributes', 'content',
    ];

    protected $casts = [
        'attributes' => 'object',
    ];
}
