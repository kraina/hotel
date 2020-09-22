<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class Feature extends Model
{
    public function properties(){
        return $this->belongsToMany(Property::class, 'feature_property', 'feature_id', 'property_id');
    }
}
