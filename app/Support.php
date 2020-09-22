<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Support extends Model
{
    protected $table = 'supports';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'message'
    ];
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public static function add($fields) // Добавление события
    {
        $event = new static;
        $event->fill($fields);
        $event->user_id = Auth::id();
        $event->save();

        return $event;
    }
}
