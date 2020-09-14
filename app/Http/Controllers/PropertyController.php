<?php

namespace App\Http\Controllers;

use App\City;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where(['user_id'=>Auth::user()->id])
            ->orderBy('created_at', 'desc')
            ->get();
        //$properties = Property::orderBy('created_at', 'desc')->get();
        //return view('properties.index', compact('properties'));
        return view('properties.account-objects', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cities = City::get();
        /*
        $properties_type = Property::select('propertyType')
            ->groupBy('propertyType')
            ->get();
        */
       // return view('properties.create', compact('categories_prop','properties_type'));
       // return view('properties.create', compact('cities'));
        return view('properties.add-object');
    }
    public function create2()
    {
        return view('properties.add-object-form');
    }
    public function create3()
    {
        return view('properties.add-object-form-success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'city_id'           => 'required',
            'title'             => 'required',
            'beds'              => '',
            'indoorSquare'      => '',
            'address'           => 'nullable',
            'location'          => '',
            'description'       => 'nullable'
        ]);
        $event = Property::add($data);

        if($request->hasFile('photo_id')){
            $files = $request->file('photo_id');
            $property_photo_name = $event->UploadPropertyPhoto($files);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
