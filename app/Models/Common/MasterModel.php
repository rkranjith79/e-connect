<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class MasterModel extends Model
{
    use SoftDeletes;

    public function scopePublished($query)
    {
        return $query->where('active', true); // Adjust the column name as needed
    }

    public function setActiveAttribute($value)
    {
        $this->attributes['active'] = $value == 'true' ? 1 : 0;
    }

    public function scopeTranslated($query)
    {
        if (App::currentLocale() == 'ta') {
            return $query->select('*', \DB::raw('language_tamil as title')); // Adjust the column name as needed
        }
    }
}
