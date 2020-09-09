<div class="large_prods_wrap row">
    @foreach($properties1 as $property1)
        <div class="col-md-6 col-lg-4">
            <div class="single_prod large_prod">
                @if(!is_null($property1->properties_photo_cover()))
                <div class="image" style="background: url({{asset('storage/properties_images/'.$property1->properties_photo_cover()->name) }});"></div>
                @endif
                <div class="single_prod_info">
                    <p class="title">{{ $property1->title }}</p>
                    <div>
                        <div>
                            <img
                                src="{{asset('/img/prod_place.svg')}}"
                                alt=""
                            />
                            <p>{{ $property1->address }}</p>
                        </div>
                        <div>
                            <img
                                src="{{asset('/img/prod_metro.svg')}}"
                                alt=""
                            />
                            <p>Маяковская</p>
                        </div>
                        <div>
                            <img
                                src="{{asset('/img/prod_clock.svg')}}"
                                alt=""
                            />
                            <p>от 2х часов</p>
                        </div>
                    </div>
                    <div class="bottom_buttons">
                        <p class="price">
                            от <span>1,000</span> руб
                        </p>
                        <a href="{{route('property', $property1->id)}}" class="details">
                            ПОДРОБНЕЕ
                        </a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>

<div class="row small_prods_wrap">
        @foreach($properties2 as $property2)
        <div class="col-md-3">
            <div class="single_prod small_prod">
                <div class="image" style="background: url({{asset('storage/properties_images/'.$property2->properties_photo_cover()->name)}});"></div>
                <div class="single_prod_info">
                    <p class="title">{{ $property2->title }}</p>
                    <div>
                        <div>
                            <img
                                src="{{asset('/img/prod_place.svg')}}"
                                alt=""
                            />
                            <p>{{ $property2->address }}</p>
                        </div>
                        <div>
                            <img
                                src="{{asset('/img/prod_metro.svg')}}"
                                alt=""
                            />
                            <p>Маяковская</p>
                        </div>
                        <div>
                            <img
                                src="{{asset('/img/prod_clock.svg')}}"
                                alt=""
                            />
                            <p>от 2х часов</p>
                        </div>
                    </div>
                    <div class="bottom_buttons">
                        <p class="price">
                            от <span>1,000</span> руб
                        </p>
                        <a href="{{route('property', $property1->id)}}" class="details">
                            ПОДРОБНЕЕ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>





