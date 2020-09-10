<?php

namespace App\Http\Controllers;

use App\City;
use App\Property;
use App\PropertiesPhoto;
use Illuminate\Http\Request;

class MenuPagesController extends Controller
{
    public function index(){
            return view('index');
    }
/*
    public function listings(){
        return view('listings');
    }
    */
    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function category($slug = null){
        $slug = Category::where('slug', $slug)->first();
        return view('category', ['category' =>$slug]);
    }
/*
    public function listings(Request $request, Property $property){
        //$properties = Property::orderBy('created_at', 'desc')->get();
        $properties = $property->getPropertiesBySearch($request)->get();
        return view('catalog', ['properties'=>$properties ]);
    }
*/
    public function property($id){
        $property = Property::where('id', $id)->first();
        return view('property', ['property' =>$property]);
    }
    public function single(){
        return view('single');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function ajax_listings(Request $request, Property $property)
    {

        //dd($request->session()->get('city'));
        /*
        if($request->session()->has("city")){
            $request->city = $request->session()->get('city');
            //dd($request);
            //$properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
            //dd($properties0->get());
            //dd($properties0->get());
            $properties0 = Property::where('city_id',$request->session()->get('city') );
            $properties1 = $properties0->limit(6)->get();
            $properties2 = $properties0->skip(6)->take(8)->get();
           // return view('catalog', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
        }
        */
        //dd($request->session()->has("city"));
        //dd($request->session()->all());
        //dd($request->city);
        //var_dump($request->vendor);
        /*
        if(request()->ajax()) {
            if(!empty($request->rooms)&&!empty($request->property_type)&&!empty($request->location)) {
                if ($request->rooms === "ALL"&&$request->property_type === "ALL"&&$request->location === "ALL") {
                    $properties0 = $property->orderBy('created_at', 'desc');
                    $properties1 = $properties0->limit(6)->get();
                    $properties2 = $properties0->offset(6)->get();
                    return view('layouts.ajax_listing', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
                }
                $properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
                $properties1 = $properties0->limit(6)->get();
                $properties2 = $properties0->offset(6)->get();
                return view('layouts.ajax_listing', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
            }
        }*/

        $city= City::where('id', $request->city)->first()->name;
        $properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
        //dd($properties0->get());
        $properties1 = $properties0->limit(6)->get();
        $properties2 = $properties0->skip(6)->take(8)->get();
       // return view('catalog', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
        return view('layouts.ajax_listing', compact('properties0', 'properties1', 'properties2', 'city'));
    }
    public function ajax_listings2(Request $request)
    {
        $city_session = $request->session()->get('city');
        if(is_null($city_session)){
            $city_session = session(['city'=>'2']);

        }
        //dd($request->session()->get('city'));

            $properties0 = Property::where('city_id', $city_session)->orderBy('created_at', 'desc');
            $city= City::where('id', $city_session)->first()->name;
            //dd($properties0->get());
            $properties1 = $properties0->limit(6)->get();
            $properties2 = $properties0->skip(6)->take(8)->get();
            return view('catalog', compact('properties0', 'properties1', 'properties2', 'city'));

    }
    public function ajax_index(Request $request, Property $property)
    {

        //dd($request->session()->get('city'));
        /*
        if($request->session()->has("city")){
            $request->city = $request->session()->get('city');
            //dd($request);
            //$properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
            //dd($properties0->get());
            //dd($properties0->get());
            $properties0 = Property::where('city_id',$request->session()->get('city') );
            $properties1 = $properties0->limit(6)->get();
            $properties2 = $properties0->skip(6)->take(8)->get();
           // return view('catalog', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
        }
        */
        //dd($request->session()->has("city"));
        //dd($request->session()->all());
        //dd($request->city);
        //var_dump($request->vendor);
        /*
        if(request()->ajax()) {
            if(!empty($request->rooms)&&!empty($request->property_type)&&!empty($request->location)) {
                if ($request->rooms === "ALL"&&$request->property_type === "ALL"&&$request->location === "ALL") {
                    $properties0 = $property->orderBy('created_at', 'desc');
                    $properties1 = $properties0->limit(6)->get();
                    $properties2 = $properties0->offset(6)->get();
                    return view('layouts.ajax_listing', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
                }
                $properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
                $properties1 = $properties0->limit(6)->get();
                $properties2 = $properties0->offset(6)->get();
                return view('layouts.ajax_listing', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
            }
        }*/

        $city= City::where('id', $request->city)->first()->name;
        $properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
        //dd($properties0->get());
        $properties1 = $properties0->limit(6)->get();
        $properties2 = $properties0->skip(6)->take(8)->get();
        // return view('catalog', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
        return view('layouts.ajax_index', compact('properties0', 'properties1', 'properties2', 'city'));
    }
    public function ajax_index2(Request $request)
    {
        $city_session = $request->session()->get('city');
        //dd($city_session);
        if(is_null($city_session)){
            $city_session = session(['city'=>'2']);

        }
        //dd($city_session);

        $properties0 = Property::where('city_id', $city_session)->orderBy('created_at', 'desc');
        $city= City::where('id', $city_session)->first()->name;
        //dd($city);
        //dd($properties0->get());
        $properties1 = $properties0->limit(6)->get();
        $properties2 = $properties0->skip(6)->take(8)->get();
        return view('index', compact('properties0', 'properties1', 'properties2', 'city'));

    }
    function ajaxFilterInputPropertyType(Request $request)
    {
        $query = !empty($request->property_type) ? ($request->property_type) : null;
        $properties = Property::select('propertyType')->groupBy('propertyType')->get();
        foreach($properties as $property) {
            $property_types[] = $property->propertyType;
        }
        echo json_encode($property_types);
    }
    function ajaxFilterInputRooms(Request $request)
    {
        $query = !empty($request->property_type) ? ($request->property_type) : null;
        $properties = Property::select('NumRooms')->groupBy("NumRooms")->orderBy("NumRooms", "asc")->get();
        foreach($properties as $property) {
            $numRooms[] = strval($property->NumRooms);
        }
        echo json_encode($numRooms);
    }
    function ajaxFilterInputLocation(Request $request)
    {
        $query = !empty($request->location) ? ($request->location) : null;
        $properties = Property::select('location')->groupBy("location")->orderBy("location", "asc")->get();
        foreach($properties as $property) {
            $property_location[] = $property->location;
        }
        echo json_encode($property_location);
    }


    public function ajax_city(Request $request){
        //dd($request->vendor);
        //dd($request->session()->get('key', 'default'));
        //dd($request->session()->all());
        //$city_session = $request->session()->put('city',$request->vendor);
        $city_session = session(['city'=>$request->city_session]);
        if($request->session()->has("city")){
            //dd($request->session()->all());
        }
    }


}
