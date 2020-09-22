<?php

namespace App\Http\Controllers;

use App\City;
use App\District;
use App\Metro;
use App\Number;
use App\NumberCategory;
use App\PropertiesPhoto;
use App\Property;
use App\RentalHour;
use App\RentalPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        $properties = Property::where(['user_id'=>Auth::user()->id])
            ->orderBy('created_at', 'desc')
            ->get();
        //$properties = Property::orderBy('created_at', 'desc')->get();
        //return view('properties.index', compact('properties'));
        if(Auth::user()->hasRole('user')){
            return view('properties.account-objects', compact('properties'));
        }else if(Auth::user()->hasRole('admin')){
            return view('properties.index', compact('properties'));
        }

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
        if(Auth::user()->hasRole('user')){
            return view('properties.add-object', compact('cities'));
        }else if(Auth::user()->hasRole('admin')){
             return view('properties.create', compact('cities'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//dd($request);
       // sleep(10);
        $images = session()->get('photo_id');
        $data = request()->validate([
            'city'              => 'required',
            'title'             => 'required',
            'beds'              => 'nullable',
            'indoorSquare'      => 'nullable',
            'address'           => 'required',
            'location'          => 'nullable',
            'description'       => 'nullable'
        ]);
        //dd($request->all());
        $event = Property::add($data);
       // $images = session()->get('photo_id');
        foreach($images as $filename){
            $event->properties_photo()->create([
                'name' => $filename
            ]);
        }
        //sleep(1);
        session()->forget(['photo_id']);
        //$request->session()->save();
        Artisan::call('config:clear');

/*
        if($request->hasFile('photo_id')){
            $files = $request->file('photo_id');
            $property_photo_name = $event->UploadPropertyPhoto($files);
        }
*/


        //$image = $request->file('photo_id');
        //$filename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $image->extension();
        //$image->storeAs('public/properties_images', $filename);

        if(Auth::user()->hasRole('user')){
            return view('properties.add-object-form-success');
        }else if(Auth::user()->hasRole('admin')){
            return view('properties.index');
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
    public function edit($id)
    {
        $property = Property::where('id', $id)->first();
        $property_id = $property->id;
        $property_title = $property->title;
        $property_city = $property->city;
        $property_district = $property->district()->first();
        $property_address = $property->address;
        $property_description = $property->description;
        //$property_metro = $property->metro()->first()->name;
        $metros_city = Metro::where('city_id', $property->city_id)->get();
        $cities = City::get();
        $metros = Metro::get();
        $districts = District::get();
        $districts_city = District::where('city_id', $property->city_id)->get();
        $number_categories = NumberCategory::get();
        $property_numbers = $property->numbers()->get();
        $numbers = Number::where("property_id", $property_id)->get();
        $number_id = $numbers->first()->id;
        $prices = $numbers->first()->prices()->get();
        $price = $prices->first()->price;
        $rental_hour_id = $prices->first()->rental_hour_id;
        $rental_hours = RentalHour::get();
        $property_rental_prices = RentalPrice::get();
        //$number_prices = $property_rental_prices->number()->get();
       // dd($number_prices);
        $number_rental_prices = RentalPrice::where('number_id', $number_id)->get();
        $numbers_rental_prices_first = $number_rental_prices->first();
        $rental_hour_text = $rental_hours->where('id', $rental_hour_id);
        foreach($number_rental_prices as $number_rental_price){
           // dd($number_rental_price);
        }
        //dd($rental_hours->first()->prices()->get()->first()->price);
        //dd($rental_hour_text->first()->name);
        //dd($numbers_rental_prices->number()->get());
        //dd($number_rental_prices->get());
        //dd($numbers_rental_prices_first);
        //dd($rental_hour_text->first()->name);
        //dd($rental_hour_id);
        //dd($price);
        //dd($prices);
        //dd($numbers);
        //dd($property_numbers);

        //$property_numbers_ids = $property_numbers->id;
        $property_number_category = $property_numbers->first()->number_category()->get();


        //dd($property_rental_prices->number());
        $property_rental_price_for_hours = '';
        if(Auth::user()->id === $property->user_id) {
            return view('properties.edit-object', compact(
                'property',
                'property_id',
                'property_title',
                'cities',
                'property_city',
                'property_address',
                'property_description',
                'metros_city',
                'districts_city',
                'property_district',
                'rental_hours',
                'number_categories',
                'property_numbers',
                'number_rental_prices',
                'property_rental_prices'
            ));
        } else {
            return back()->with('message','access forbidden');
        }
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
    /*
    function text_request(Request $request){

    }
    */
    public function imgDropzoneUpload(Request $request)
    {
       // session()->forget(['photo_id']);
        //sleep(1);
        //$request->session()->save();
        //Artisan::call('config:clear');
        $images = $request->file('photo_id');
        $data = request()->validate([
            'city'              => 'required',
            'title'             => 'required',
            'beds'              => 'nullable',
            'indoorSquare'      => 'nullable',
            'address'           => 'required',
            'location'          => 'nullable',
            'description'       => 'nullable'
        ]);
        //dd($request->all());
        $event = Property::add($data);
        $filenames = array();
        foreach($images as $image){
            $filename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $image->extension();
            $image->storeAs('public/properties_images', $filename);
        //$image = $request->file('photo_id');
            $filenames[] = $filename;


            // $images = session()->get('photo_id');
            //foreach($images as $filename){
                $event->properties_photo()->create([
                    'name' => $filename
                ]);
           // }



        if(!is_null($filename)){
            Artisan::call('config:clear');
           // $request->session()->put('photo_id', $filename);
            $request->session()->push('photo_id', $filename);
            $request->session()->save();
            $request->session()->push('photo_id2', $filename);
            $request->session()->save();

        }
        }
        if(Auth::user()->hasRole('user')){
            return view('properties.add-object-form-success');
        }else if(Auth::user()->hasRole('admin')){
            return view('properties.index');
        }

        /*
        if(Auth::user()->hasRole('user')){
            return view('properties.add-object-form-success');
        }else if(Auth::user()->hasRole('admin')){
            return view('properties.index');
        }else{
            return view('index');
        }
*/
/*
        $data = request()->validate([
            'city'              => 'required',
            'title'             => 'required',
            'beds'              => 'nullable',
            'indoorSquare'      => 'nullable',
            'address'           => 'required',
            'location'          => 'nullable',
            'description'       => 'nullable'
        ]);
 $event = Property::add($data);
*/

       // $image = $request->file('photo_id');

   // $filename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $image->extension();
   // $image->storeAs('public/properties_images', $filename);
    /*
    $event->properties_photo()->create([
        'name' => $filename,
    ]);
*/
/*
        if(Auth::user()->hasRole('user')){
            return view('properties.add-object-form-success');
        }else if(Auth::user()->hasRole('admin')){
            return view('properties.index');
        }
*/
    }
    public function imgDropzoneFetch($id)
    {
        //$images = \File::allFiles('storage/properties_images');
        $property = Property::where('id', $id)->first();
        if(Auth::user()->id === $property->user_id) {
            $properties_photo = $property->properties_photo()->get();
            $output = '<div class="row">';
            foreach($properties_photo as $image)
            {
                $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="'.asset('storage/properties_images/' . $image->name).'" class="img-thumbnail" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="'.$image->name.'">Remove</button>
            </div>
      ';
            }
            $output .= '</div>';
            echo $output;
        } else {
            return back()->with('message','access forbidden');
        }
    }
    function imgDropzoneDelete(Request $request, $id = null)
    {
        $property = Property::where('id', $id)->first();
        if(Auth::user()->id === $property->user_id) {
            $name = $request->get('name');
            PropertiesPhoto::where('name', $name )->delete();
            $photo_path = 'storage/properties_images/' . $name;
            unlink($photo_path);
        } else {
            return back()->with('message','access forbidden');
        }
    }

}
