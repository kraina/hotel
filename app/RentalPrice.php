<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalPrice extends Model
{
    protected $table = 'rental_prices';
    public $primaryKey = 'id';
    protected $fillable = [
        'number_id',
        'hour_id',
        'price',
    ];
    public function number() {
        return $this->belongsTo(Number::class);
    }
    public function hour() {
        return $this->belongsTo(RentalHour::class);
    }
}
