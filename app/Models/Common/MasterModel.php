<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterModel extends Model
{
    public function scopePublished($query)
    {
        return $query->where('active', true); // Adjust the column name as needed
    }
}
