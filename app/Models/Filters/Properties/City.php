<?php


namespace App\Models\Filters\Properties;


use App\Services\Filters\Filterable;
use Illuminate\Database\Eloquent\Builder;

class City implements Filterable
{

    public static function apply(Builder $builder, $value)
    {
        /*
        if($value === "ALL"){
            return $builder->where("id", "!=", $value);
        }
        */
       // dd($value);
        /*
        if(!is_array($value)) {
            $value = explode(', ', $value);
        }
        */
        //dd($value);
        return $builder->where('city', $value);
    }
}
