<?php

namespace App\Http\Controllers;

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

    public function listings(Request $request, Property $property){
        //$properties = Property::orderBy('created_at', 'desc')->get();
        $properties = $property->getPropertiesBySearch($request)->get();
        return view('catalog', ['properties'=>$properties ]);
    }

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
        }
        $properties0 = $property->getPropertiesBySearch($request)->orderBy('created_at', 'desc');
        $properties1 = $properties0->limit(6)->get();
        $properties2 = $properties0->skip(6)->take(8)->get();
        return view('catalog', ['properties' => $properties0, 'properties1' =>$properties1, 'properties2' =>$properties2]);
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
        if(request()->ajax()) {
            //$select_tyres = $select_tyre->getSelectTyresBySearch($request)->get();
           // $select_tyres = array(1,2);
           // return view('layouts.ajax_city', ['select_tyres' => $select_tyres]);
        }
    }


}
