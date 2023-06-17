@extends('../layouts/frontend')

@section('content')
    	<!-- Result -->

        <div class="container " style="margin-top:150px;margin-left:200px;">
            <h3>Result :</h3>
        </div>
    
    
        <div class=" d-flex" style="margin-top:20px">
    
            <div class="col">
                <div class="filter">
                    <h4>Filter:</h4>
                    <dt>Property Type</dt>
                    <ul>
                      <li>
                        <input type="checkbox" id="filter1" name="filter[]" value="option1">
                        <label for="filter1">Apartemen</label>
                      </li>
                      <li>
                        <input type="checkbox" id="filter2" name="filter[]" value="option2">
                        <label for="filter2">Hotel</label>
                      </li>
                      <li>
                        <input type="checkbox" id="filter3" name="filter[]" value="option3">
                        <label for="filter3">Villa</label>
                      </li>
                    </ul>
                    <hr>
                    <dt>Bed Type</dt>
                    <ul>
                      <li>
                        <input type="checkbox" id="filter1" name="filter[]" value="option1">
                        <label for="filter1">Double</label>
                      </li>
                      <li>
                        <input type="checkbox" id="filter2" name="filter[]" value="option2">
                        <label for="filter2">Single/Twin</label>
                      </li>
                      <li>
                        <input type="checkbox" id="filter3" name="filter[]" value="option3">
                        <label for="filter3">Twin</label>
                      </li>
                    </ul>
                    <hr>
                    <dt>Discount & Promo</dt>
                    <ul>
                      <li>
                        <input type="checkbox" id="filter1" name="filter[]" value="option1">
                        <label for="filter1">Discount 50% or More</label>
                      </li>
                    </ul>
                  </div>
            </div>
    
            @if ($results->count() > 0)
            <ul >
                @foreach ($results as $result)
                    <div class="col mb-5" style="background-color: black;">
                        <div class="container container-card p-4" >
                            <div class="row" style="width: 1100px;">
                                <div class="col-md-3" style="">
                                    <div class="booking_item">
                                        <div class="background_image" style="background-image:url({{ asset('assets/frontend/images/booking_3.jpg') }})"></div>
                                        <div class="booking_overlay trans_200"></div>
                                        <div class="booking_link"><a href="" style="color:black;">{{ $result->name }}</a></div>
                                    </div>
                                </div>
                
                                <div class="col-md-3" style="">
                                    <div class="booking_item">
                                        <dl style="color:white">
                                            <dt>Price</dt>
                                            <div class="row" style="width:300px;">
                                                <div class="col-md-12 ">
                                                    <div class="col-md-4 d-flex " style="">
                                                        <s><h4 style="color:white;">450.000</h4> </s> <br>
                                                    </div>
                                                    <div class="col-md-8 d-flex " style="">
                                                        <b><h3 style="color: red;">Rp 250.000</h3> <h5 style="width:50%;background-color:white;color:black"> 45% OFF</h5> </b>
                                                    </div>
                                                <div>
                                            </div>
                                            <dt>Type</dt>
                                            <div class="row" style="width:300px;">
                                                <div class="col-md-12 ">
                                                    <dd>Single Room</dd>
                                                <div>
                                            </div>
                                            <dt>Packages</dt>
                                            <div class="row" style="width:300px;">
                                                <div class="col-md-12 ">
                                                    <dd>Snorkling</dd>
                                                    <dd>Hiking</dd>
                                                <div>
                                            </div>
                                            <dt>Cancellation Policy</dt>
                                            <div class="row" style="width:300px;">
                                                <div class="col-md-12 ">
                                                    <dd>5 Days After Check-in</dd>
                                                    <dd>3 Days Before Check-in</dd>
                                                <div>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                
                                <div class="col-md-4 ml-5" style="">
                                    <div class="booking_item">
                                        <dl style="color:white">
                                            <dt>Facilites</dt>
                                            <div class="row" style="width:350px;">
                                                <div class="col-md-6">
                                                    <dd><i class="fa fa-snowflake-o"></i> Air conditioning</dd>
                                                    <dd><i class="fa fa-television"></i> Television</dd>
                                                    <dd><i class="fa fa-wifi"></i> Free Wi-Fi</dd>
                                                    <dd><i class="fa fa-glass"></i> Minibar</dd>
                                                    <dd><i class="fa fa-coffee"></i> Coffee/tea maker</dd>
                                                    <dd><i class="fa fa-lock"></i> Safe deposit box</dd>
                                                    <dd><i class="fa fa-umbrella"></i> Balcony/terrace</dd>
                                                    <dd><i class="fa fa-shirtsinbulk"></i> Wardrobe/closet</dd>
                                                    <dd><i class="fa fa-clock-o"></i> Wake-up service</dd>
                                                    <dd><i class="fa fa-scissors"></i> Hairdryer</dd>
                                                </div>
                                                <div class="col-md-6">
                                                    <dd><i class="fa fa-phone"></i> Telephone</dd>
                                                    <dd><i class="fa fa-bell"></i> Room service</dd>
                                                    <dd><i class="fa fa-bath"></i> Complimentary toiletries</dd>
                                                    <dd><i class="fa fa-male"></i> Bathrobe and slippers</dd>
                                                    <dd><i class="fa fa-briefcase"></i> Work desk</dd>
                                                    <dd><i class="fa fa-bed"></i> Daily housekeeping</dd>
                                                    <dd><i class="fa fa-shirtsinbulk"></i> Laundry service</dd>
                                                    <dd><i class="fa fa-hotel"></i> 24-hour front desk</dd>
                                                <div>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
            @else
                <p>No results found.</p>
            @endif
    
    
    
    
        </div>
@endsection