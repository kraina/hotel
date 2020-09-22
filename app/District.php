<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function city() {
        return $this->belongsTo(City::class);
    }
    public function property(){
        return $this->hasMany(Property::class);
    }
}
