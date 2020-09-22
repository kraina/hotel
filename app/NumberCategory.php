<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Number;

class NumberCategory extends Model
{
    public function numbers(){
        return $this->hasMany(Number::class);
    }
}
