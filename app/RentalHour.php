<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalHour extends Model
{
    public function prices(){
        return $this->hasMany(RentalPrice::class);
    }
}
