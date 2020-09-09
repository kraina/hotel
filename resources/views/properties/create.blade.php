@extends('adminlte::page')
@section('title', 'Create property')

@section('style')

@endsection

@section('script')

@endsection

@section("content")
    <h1>Create property</h1>
@include('properties.tabs_for_create_edit')
@endsection
    <!--
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 mb-3">

                <ul class="nav nav-pills flex-column" id="myTab" role="tablist" aria-orientation="vertical">
                    <li class="nav-item p-2 flex-fill bd-highlight">
                       <a class="nav-link active" id="v-pills-basic-tab" data-toggle="pill" href="#v-pills-basic" role="tab" aria-controls="v-pills-basic" aria-selected="true">Basic Information</a>
                    </li>
                    <li class="nav-item p-2 flex-fill bd-highlight">
                        <a class="nav-link" id="v-pills-features-tab" data-toggle="pill" href="#v-pills-features" role="tab" aria-controls="v-pills-features" aria-selected="false">Additional Features</a>
                    </li>
                    <li class="nav-item p-2 flex-fill bd-highlight">
                      <a class="nav-link" id="v-pills-images-tab" data-toggle="pill" href="#v-pills-images" role="tab" aria-controls="v-pills-images" aria-selected="false">Images</a>
                    </li>
                </ul>
                -->
    <!--
            </div>
            -->
            <!-- /.col-md-4 -->
<!--
            <div class="col-10">
                <div class="tab-content" id="myTabContent">
                    {\\!! Form::open(['action' => 'PropertiesController@store', 'method' => 'POST', 'multiple'=>'multiple', 'enctype' => 'multipart/form-data',  'files' => true, 'id' => 'dropzone']) !!}
                    <div class="tab-pane fade show active " id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
                        1111111111111111 111111111111111111 11111111111111111111111
                        -->
                        <!--
                        <div class="d-xl-flex justify-content-between">
                                <div class="card col-xl pt-4 m-1">
                                <div class="d-xl-flex flex-row form-group " >
                                    {\\{ Form::label('title', 'Title*') }}
                                    {\\{ Form::text('title', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Title']) }}
                                </div>
                                    <div class="d-xl-flex justify-content-between" >
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('NumRooms', 'Rooms*', ['class' => '']) }}
                                            {\\{ Form::number('NumRooms', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Number of Rooms']) }}
                                        </div>
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('beds', 'Beds*', ['class' => '']) }}
                                            {\\{ Form::number('beds', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Number of Beds']) }}
                                        </div>
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('baths', 'Baths', ['class' => '']) }}
                                            {\\{ Form::number('baths', '', ['class' => 'form-control', 'placeholder' => 'Number of Baths']) }}
                                        </div>
                                    </div>
                                    <div class="d-xl-flex justify-content-between" >

                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('indoorSquare', 'Indoor Area,&nbsp;&nbsp;m<sup>2</sup>*', ['class' => ''], false) }}
                                            {\\{ Form::number('indoorSquare', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Indoor Square, m²']) }}
                                        </div>
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('outdoorSquare', 'Outdoor&thinsp;Area,&thinsp;m<sup>2</sup>', ['class' => ''], false) }}
                                            {\\{ Form::number('outdoorSquare', '', ['class' => 'form-control', 'placeholder' => 'Outdoor Square, m²' ]) }}
                                        </div>
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('kitchenSquare', 'Kitchen Area,&nbsp;&nbsp;m<sup>2</sup>', ['class' => ''], false) }}
                                            {\\{ Form::number('kitchenSquare', '', ['class' => 'form-control', 'placeholder' => 'Kitchen Square, m²']) }}
                                        </div>
                                        </div>



                                    <div class="d-xl-flex justify-content-between" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('country', 'Country*', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('country', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Country']) }}
                                    </div>

                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('state', 'State', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('state', '', ['class' => 'form-control', 'placeholder' => 'State']) }}
                                    </div>
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('city', 'City*', ['class' => 'text-nowrap']) }}
                                            {\\{ Form::text('city', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'City']) }}
                                        </div>
                                    </div>
                                    <div class="d-xl-flex" >
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('address', 'Address', ['class' => 'text-nowrap']) }}
                                            {\\{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address']) }}
                                        </div>
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('location', 'Location*', ['class' => 'text-nowrap']) }}
                                            {\\{ Form::text('location', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Location']) }}
                                        </div>
                                    </div>
                                </div>

                            <div class="card col-xl pt-4 m-1" >
                                <div class="d-xl-flex" >
                                <div class="col-xl form-group" >
                                    <select id="categories" name='categories' class="form-control border border-secondary">
                                        <option>Вид сделки*</option>
                                        @\\foreach($categories_prop as $category)
                                            <option  >{\\{$category->categories}}</option>
                                        @\\endforeach
                                    </select>
                                </div>
                                <div class="col-xl form-group">
                                    <select class="form-control border border-secondary" name="propertyType" id="propertyType">
                                        <option>Тип недвижимости*</option>
                                        @\\foreach($properties_type as $property_type)
                                            <option>{\\{$property_type->propertyType}}</option>
                                        @\\endforeach
                                    </select>
                                </div>
                                </div>
                                <div class="d-xl-flex" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('price', 'Price*', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::number('price', '0.00', ['step' => "0.01", 'class' => 'form-control border border-secondary', 'placeholder' => 'Price']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('legal', 'Legal', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('legal', '', ['class' => 'form-control', 'placeholder' => 'Legal']) }}
                                    </div>
                                </div>
                                    <div class="d-xl-flex" >
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('constructionStage', 'Construction Stage', ['class' => 'text-nowrap']) }}
                                            {\\{ Form::text('constructionStage', '', ['class' => 'form-control', 'placeholder' => 'Construction Stage']) }}
                                        </div>
                                        <div class="col-xl form-group" >
                                            {\\{ Form::label('completedIn', 'Completed in, year', ['class' => 'text-nowrap']) }}
                                            {\\{ Form::number('completedIn', '', ['class' => 'form-control', 'placeholder' => 'Completed in, year']) }}
                                        </div>
                                    </div>
                                <div class="d-xl-flex" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('floor', 'Floor') }}
                                        {\\{ Form::number('floor', '', ['class' => 'form-control', 'placeholder' => 'Floor']) }}
                                    </div>
                                <div class="col-xl form-group" >
                                    {\\{ Form::label('floors', 'Floors') }}
                                    {\\{ Form::number('floors', '', ['class' => 'form-control', 'placeholder' => 'Floors']) }}
                                </div>

                                </div>
                            </div>

                        </div>
                        <div class="card col-xl form-group p-3 m-1">
                        {\\{ Form::label('description', 'Description') }}
                    {\\{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description']) }}
                        </div>
                        <div class="form-group" >
                            {\\{ Form::label('photo_id', 'Upload Photos') }}
                            {\\{ Form::file('photo_id[]', ['multiple'=>'multiple', 'enctype' => 'multipart/form-data'], ['class' => 'form-control']) }}
                        </div>
                        {\\{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
--->
    <!--
                    </div>

                    <div class="tab-pane fade" id="v-pills-features" role="tabpanel" aria-labelledby="v-pills-features-tab">

                    222222222222222 222222222222222 22222222222222222 222222222222222 222222222222222
                    -->
                        <!----
                        <div class="d-xl-flex justify-content-between">
                            <div class="card col-xl pt-4 m-1">
                                <div class="d-xl-flex flex-row form-group " >
                                    {\\{ Form::label('title', 'Title*') }}
                                    {\\{ Form::text('title', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Title']) }}
                                </div>
                                <div class="d-xl-flex justify-content-between" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('NumRooms', 'Rooms*', ['class' => '']) }}
                                        {\\{ Form::number('NumRooms', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Number of Rooms']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('beds', 'Beds*', ['class' => '']) }}
                                        {\\{ Form::number('beds', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Number of Beds']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('baths', 'Baths', ['class' => '']) }}
                                        {\\{ Form::number('baths', '', ['class' => 'form-control', 'placeholder' => 'Number of Baths']) }}
                                    </div>
                                </div>
                                <div class="d-xl-flex justify-content-between" >

                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('indoorSquare', 'Indoor Area,&nbsp;&nbsp;m<sup>2</sup>*', ['class' => ''], false) }}
                                        {\\{ Form::number('indoorSquare', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Indoor Square, m²']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('outdoorSquare', 'Outdoor&thinsp;Area,&thinsp;m<sup>2</sup>', ['class' => ''], false) }}
                                        {\\{ Form::number('outdoorSquare', '', ['class' => 'form-control', 'placeholder' => 'Outdoor Square, m²' ]) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('kitchenSquare', 'Kitchen Area,&nbsp;&nbsp;m<sup>2</sup>', ['class' => ''], false) }}
                                        {\\{ Form::number('kitchenSquare', '', ['class' => 'form-control', 'placeholder' => 'Kitchen Square, m²']) }}
                                    </div>
                                </div>



                                <div class="d-xl-flex justify-content-between" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('country', 'Country*', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('country', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Country']) }}
                                    </div>

                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('state', 'State', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('state', '', ['class' => 'form-control', 'placeholder' => 'State']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('city', 'City*', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('city', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'City']) }}
                                    </div>
                                </div>
                                <div class="d-xl-flex" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('address', 'Address', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('location', 'Location*', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('location', '', ['class' => 'form-control border border-secondary', 'placeholder' => 'Location']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="card col-xl pt-4 m-1" >
                                <div class="d-xl-flex" >
                                    <div class="col-xl form-group" >
                                        <select id="categories" name='categories' class="form-control border border-secondary">
                                            <option>Вид сделки*</option>
                                            @\\foreach($categories_prop as $category)
                                                <option  >{\\{$category->categories}}</option>
                                            @\\endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl form-group">
                                        <select class="form-control border border-secondary" name="propertyType" id="propertyType">
                                            <option>Тип недвижимости*</option>
                                            @\\foreach($properties_type as $property_type)
                                                <option>{\\{$property_type->propertyType}}</option>
                                            @\\endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-xl-flex" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('price', 'Price*', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::number('price', '0.00', ['step' => "0.01", 'class' => 'form-control border border-secondary', 'placeholder' => 'Price']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('legal', 'Legal', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('legal', '', ['class' => 'form-control', 'placeholder' => 'Legal']) }}
                                    </div>
                                </div>
                                <div class="d-xl-flex" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('constructionStage', 'Construction Stage', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::text('constructionStage', '', ['class' => 'form-control', 'placeholder' => 'Construction Stage']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('completedIn', 'Completed in, year', ['class' => 'text-nowrap']) }}
                                        {\\{ Form::number('completedIn', '', ['class' => 'form-control', 'placeholder' => 'Completed in, year']) }}
                                    </div>
                                </div>
                                <div class="d-xl-flex" >
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('floor', 'Floor') }}
                                        {\\{ Form::number('floor', '', ['class' => 'form-control', 'placeholder' => 'Floor']) }}
                                    </div>
                                    <div class="col-xl form-group" >
                                        {\\{ Form::label('floors', 'Floors') }}
                                        {\\{ Form::number('floors', '', ['class' => 'form-control', 'placeholder' => 'Floors']) }}
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="card col-xl form-group p-3 m-1">
                            {\\{ Form::label('description', 'Description') }}
                            {\\{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description']) }}
                        </div>
                        <div class="form-group" >
                            {\\{ Form::label('photo_id', 'Upload Photos') }}
                            {\\{ Form::file('photo_id[]', ['multiple'=>'multiple', 'enctype' => 'multipart/form-data'], ['class' => 'form-control']) }}
                        </div>
                    {\\{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                            -->
                      <!--  <div class="d-flex"> -->
<!--
            <div class="form-group" >
            {\{ Form::label('garages', 'Number of Garages') }}
            {\{ Form::number('garages', '', ['class' => 'form-control', 'placeholder' => 'Number of Garages']) }}
            </div>
-->
                            <!--
            <div class="form-group" >
            {\{ Form::label('features', 'Features') }}
            {\{ Form::text('features', '', ['class' => 'form-control', 'placeholder' => 'Features']) }}
            </div>
            -->

                            <!--
            <div class="form-group" >
                {\{ Form::label('nearbyAmenities', 'Nearby Amenities') }}
                {\{ Form::text('nearbyAmenities', '', ['class' => 'form-control', 'placeholder' => 'Nearby Amenities']) }}
            </div>
            -->
                            <!--
                            <div class="form-group" >
                                {\{ Form::label('tags', 'Tags') }}
                                {\{ Form::text('tags', '', ['class' => 'form-control', 'placeholder' => 'Tags']) }}
                            </div>
                            -->

                            <!--
                            <div class="form-group" >
                                {\{ Form::label('videos', 'Videos') }}
                                {\{ Form::text('videos', '', ['class' => 'form-control', 'placeholder' => 'Videos']) }}
                            </div>
                            -->

                      <!--  </div> -->
    <!--
                    </div>

                    <div class="tab-pane fade" id="v-pills-images" role="tabpanel" aria-labelledby="v-pills-images-tab">

                        Images
                    </div>

                    {\\!! Form::close() !!}
                </div>
            </div>
            -->
            <!-- /.col-md-8 -->

<!--
        </div>
    </div>
    </div>
-->

