<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class City extends Model
{

    public function properties(){
        return $this->hasMany(Property::class);
    }

}
