<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function properties(){
        return $this->belongsToMany('App\Property', 'feature_property', 'feature_id', 'property_id');
    }
}
