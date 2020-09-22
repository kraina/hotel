<?php

namespace App;

use App\Models\Filters\Properties\PropertySearch;
use App\Property;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Number extends Model
{
    protected $table = 'numbers';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'property_id',
        'number_category_id',
        'numbers_in_category',
        'beds',
        'indoorSquare',
    ];
    public function property(){
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
    public function number_category(){
        return $this->belongsTo(NumberCategory::class);
    }

    public static function add($fields) // Добавление события
    {
        $event = new static;
        $event->fill($fields);
        $event->user_id = Auth::id();
        $event->save();

        return $event;
    }
    public function UploadNumberPhoto($files){
        if(count($files) == 0 ) { return; }
        foreach ($files as $file) {
            $filename = pathinfo(str_replace(")", "_", str_replace("(", "_", str_replace(" ","_",$file->getClientOriginalName()))), PATHINFO_FILENAME). '_' . time(). '.'.$file->extension();
            $file->storeAs('public/properties_images', $filename);
            $this->numbers_photo()->create([
                'name'=>$filename,
            ]);
        }
    }
    public function prices(){
        return $this->hasMany(RentalPrice::class);
    }
    public function numbers_photo(){
        return $this->hasMany(NumberPhoto::class);
    }
    public function numbers_photo_cover()
    {
        return $this->numbers_photo()->first();
    }
/*
    public function getPropertiesBySearch(Request $request):Builder
    {
        $builder = (new PropertySearch())->apply($request);
        return $builder;
    }
*/
    public static function update_number($fields, $id){

        $event = new static;
        $event->user_id = Auth::id();
        $event->where('id', $id)->update($fields);

        return $event;
    }
    /*
    public function features(){
        return $this->belongsToMany('App\Feature', 'feature_property', 'property_id', 'feature_id');
    }
*/
}
