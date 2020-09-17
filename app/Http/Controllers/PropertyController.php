<?php

namespace App\Http\Controllers;

use App\City;
use App\Property;
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

        if($request->hasFile('photo_id')){
            $files = $request->file('photo_id');
            $property_photo_name = $event->UploadPropertyPhoto($files);
        }
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
    function text_request(Request $request){

        if ($request->hasFile('dZUpload')) {
            if($request->file('dZUpload')) {
                return 'OK';
            }
        }

return $request->all();
        $data = request()->validate([
            'city'              => 'required',
            'title'             => 'required',
            'address'           => 'required',
        ]);
        //dd($request->all());
        $event = Property::add($data);

        if($request->hasFile('photo_id')){
            $files = $request->file('photo_id');
            $property_photo_name = $event->UploadPropertyPhoto($files);
        }
        if(Auth::user()->hasRole('user')){
            return view('properties.add-object-form-success');
        }else if(Auth::user()->hasRole('admin')){
            return view('properties.index');
        }

        return $request->all();
    }
    public function imgDropzoneUpload(Request $request)
    {
        //dd($request->file('file'));
        //$text = $this->text_request();
        $text = $request->session()->get('text');
        $image = $request->file('file');
        //$property = Property::where('id', $id)->first();
        //if(Auth::user()->id === $property->user_id) {
            $filename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME). '_' . time().$text.'.'.$image->extension();
            $image->storeAs('public/properties_images', $filename);
           // $property->properties_photo()->create([
             //   'name'=>$filename,
           // ]);
            return response()->json(['success' => $filename]);
       // } else {
        //    return back()->with('message','access forbidden');
      //  }
    }

}
