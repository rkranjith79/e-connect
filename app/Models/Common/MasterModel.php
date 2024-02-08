<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterModel extends Model
{
    use SoftDeletes;

    public function scopePublished($query)
    {
        return $query->where('active', true); // Adjust the column name as needed
    }
}
