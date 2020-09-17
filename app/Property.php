<?php

namespace App;

use App\Models\Filters\Properties\PropertySearch;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Property extends Model
{
    protected $table = 'properties';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'city',
        'title',
        'beds',
        'indoorSquare',
        'address',
        'location',
        'description'
    ];
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

    public static function add($fields) // Добавление события
    {
        $event = new static;
        $event->fill($fields);
        $event->user_id = Auth::id();
        $event->save();

        return $event;
    }
    public function UploadPropertyPhoto($files){
        if(count($files) == 0 ) { return; }
        foreach ($files as $file) {
            $filename = pathinfo(str_replace(")", "_", str_replace("(", "_", str_replace(" ","_",$file->getClientOriginalName()))), PATHINFO_FILENAME). '_' . time(). '.'.$file->extension();
            $file->storeAs('public/properties_images', $filename);
            $this->properties_photo()->create([
                'name'=>$filename,
            ]);
        }
    }
    public function properties_photo(){
        return $this->hasMany(PropertiesPhoto::class);
    }
    public function properties_photo_cover()
    {
        return $this->properties_photo()->first();
    }

    public function getPropertiesBySearch(Request $request):Builder
    {
        $builder = (new PropertySearch())->apply($request);
        return $builder;
    }

    public static function update_property($fields, $id){

        $event = new static;
        $event->user_id = Auth::id();
        $event->where('id', $id)->update($fields);

        return $event;
    }
    public function features(){
        return $this->belongsToMany('App\Feature', 'feature_property', 'property_id', 'feature_id');
    }

}
