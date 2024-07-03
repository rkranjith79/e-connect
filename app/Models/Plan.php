<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'plans';

    protected $fillable = [
        'id', 'title', 'expire_in_days', 'attributes', 'profile_count', 'order_by', 'price',
    ];

    protected $casts = [
        'attributes' => 'object',
        'profile_count' => 'integer',
        'order_by' => 'integer',
        'expire_in_days' => 'integer',
        'price' => 'decimal:2',
    ];

    public static function getInitialPlan($id = '')
    {
        return self::where('active', 1)
            ->when(! empty($id), function ($query) use ($id) {
                $query = $query->where('id', $id);

                return $query;
            })
            ->orderBy('order_by', 'ASC')
            ->orderBy('id', 'ASC')
            ->first();
    }

    public function setActiveAttribute($value)
    {
        $this->attributes['active'] = $value == 'true' ? 1 : 0;
    }
}
