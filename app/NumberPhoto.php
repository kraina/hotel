<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NumberPhoto extends Model
{
    protected $table = 'number_photos';
    public $primaryKey = 'id';
    protected $fillable = [
        'number_id',
        'name',
    ];
    public function number() {
        return $this->belongsTo(Number::class);
    }
}
