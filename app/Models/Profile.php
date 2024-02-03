<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        "blood_group_id",  
        "title",
        "color_id",
        "body_type_id",
        "weight_id",
        "height_id",
        "physical_status_id",
        "registered_by_id",
        "marital_status_id",
        "gender_id",
        "user_id",
        "email",
        "active"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    
    public function body_type()
    {
        return $this->belongsTo(BodyType::class);
    }

    public function weight()
    {
        return $this->belongsTo(Weight::class);
    }

    public function height()
    {
        return $this->belongsTo(Height::class);
    }

    public function physical_status()
    {
        return $this->belongsTo(PhysicalStatus::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function marital_status()
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function registered_by()
    {
        return $this->belongsTo(RegisteredBy::class);
    }  
    
    public function getModelData($data){
        // Full data get 
    }
}
