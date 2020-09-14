<?php

namespace App\Http\Controllers;

use App\City;
use App\Property;
use App\PropertiesPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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
        $city_session = $request->session()->get('city');

        if($request->session()->has("city")){
            $request->city = $request->session()->get('city');

            //$properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
            //$properties0 = Property::where('city_id',$request->session()->get('city') );
           // $properties1 = $properties0->limit(6)->get();
           // $properties2 = $properties0->skip(6)->take(8)->get();
           // return view('catalog', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
        }
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
        //dd($request->get('city'));
        //$current_city= City::where('id', $city_session)->first()->name;
        $current_city = $city_session;
        $cities = City::get();
        $properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
        //dd($properties0->get());
        $properties1 = $properties0->limit(6)->get();
        $properties2 = $properties0->skip(6)->take(8)->get();
       // return view('catalog', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
        return view('layouts.ajax_listing', compact('properties0', 'properties1', 'properties2', 'current_city', 'cities'));
    }
    public function ajax_listings2(Request $request)
    {
        $request->session()->get('city');
        if(is_null(session()->get('city'))){
            $current_city = "Санкт-Петербург";
        }else{
            $current_city = session()->get('city');
        }
            $cities = City::get();
            $city_id = City::where('city', $current_city)->get()->first()->id;
            $properties0 = Property::where('city', $current_city)->orderBy('created_at', 'desc');
            //$current_city= City::where('id', $current_city)->first()->name;

            //dd($properties0->get());
            $properties1 = $properties0->limit(6)->get();
            $properties2 = $properties0->skip(6)->take(8)->get();
            return view('catalog', compact('properties0', 'properties1', 'properties2', 'current_city', 'cities'));

    }
    private function ajax_index(Request $request, Property $property)
    {
        $city_session = $request->session()->get('city');
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

        //$current_city= City::where('id', $city_session)->first()->name;
        $current_city = $city_session;
        $cities = City::get();

        $properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
        $properties1 = $properties0->limit(6)->get();
        $properties2 = $properties0->skip(6)->take(8)->get();
        $properties_mob = $properties0->get();
//dd($cities);
        return view('layouts.ajax_index', compact('properties0', 'properties1', 'properties2', 'properties_mob', 'current_city', 'cities'));
    }
    public function ajax_index2(Request $request)
    {
        $request->session()->get('city');
        if(is_null(session()->get('city'))){
            $current_city = "Санкт-Петербург";
        }else{
            $current_city = session()->get('city');
        }
        $cities = City::get();
        $city_id = City::where('city', $current_city)->get()->first()->id;
        $properties0 = Property::where('city', $current_city)->orderBy('created_at', 'desc');
        //$current_city= City::where('id', $current_city)->first()->name;
        $properties1 = $properties0->limit(6)->get();
        $properties2 = $properties0->skip(6)->take(8)->get();
        $properties_mob = $properties0->get();
        //Artisan::call('cache:clear');
        return view('index', compact('properties0', 'properties1', 'properties2', 'properties_mob', 'current_city', 'cities'));

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

    public function ajax_city(Request $request, Property $property){

       // $current_city= City::where('name', $request->get('city'))->first()->id;
        $current_city= $request->get('city');
        $page = $request->get('page');
        $index_url = url('/');

        if(!is_null($request->get('city'))){
            Artisan::call('config:clear');
            $request->session()->forget(['city']);
            $request->session()->put('city', $current_city);
            $request->session()->save();
        }
        if($page == $index_url) {
            return $this->ajax_index($request, $property);
        }else if($page === $index_url."/catalog" ){
           return $this->ajax_listings($request, $property);
        }
    }
}
