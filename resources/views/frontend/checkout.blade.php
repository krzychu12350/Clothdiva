@extends('layouts.app')
@section('contact')

<!-- Checkout Section Begin -->
<section class="checkout spad">
        <div class="container">
            <form action="{{ route('place.order') }}" method="GET" name="checkout" class="checkout__form">
            @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="mt-1 mb-1">
                                    @if($user_data->isNotEmpty())
                                    <input type="checkbox" id="address-data" name="address-data">
                                    <span>Fill in with your account details</span><br>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">        
                        @if($user_data->isNotEmpty())
                        @foreach($user_data as $single_info) 
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" id="fname" name="fname" min-length="3" placeholder="{{$single_info->name}}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" id="lname" name="lname" min-length="3" placeholder="{{$single_info->surname}}" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" id="phone" name="phone" min-length="3" placeholder="{{$single_info->mobile}}" equired>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" id="email" name="email" min-length="5" placeholder="{{$single_info->email}}" required>
                                </div>
                            </div>
                           <!-- <div class="col-lg-12">-->
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Street <span>*</span></p>
                                    <input type="text" id="street" name="street" min-length="3" placeholder="{{$single_info->name_of_street}}" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Apartment number <span>*</span></p>
                                        <input type="text" id="apartment_number" name="apartment_number" min-length="2" placeholder="{{ $single_info->apartment_number }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>House number <span>*</span></p>
                                         <input type="text" id="house_number" name="house_number" min-length="2" placeholder="{{ $single_info->house_number }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Postcode/Zip <span>*</span></p>
                                    <input type="text" id="postcode" name="postcode" min-length="5" placeholder="{{$single_info->post_code}}" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Town/City <span>*</span></p>
                                    <input type="text" id="city" name="city" min-length="3" placeholder="{{$single_info->name_of_city}}" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>State <span>*</span></p>
                                    <input type="text" id="state" name="state" min-length="3" placeholder="{{$single_info->county}}" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Country<span>*</span></p>
                                    <input type="text" id="country" name="country" min-length="3" placeholder="Country" required>
                                </div>
                                </div>
                            </div>
                          <!--  </div>-->
                            @endforeach
                            @else
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" id="fname" name="fname" min-length="3" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" id="lname" name="lname" min-length="3" placeholder="Surname" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" id="phone" name="phone" min-length="3" placeholder="Mobile phone" equired>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" id="email" name="email" min-length="5" placeholder="E-mail" required>
                                </div>
                            </div>
                           <!-- <div class="col-lg-12">-->
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Street <span>*</span></p>
                                    <input type="text" id="street" name="street" min-length="3" placeholder="Street" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Apartment number <span>*</span></p>
                                        <input type="text" id="apartment_number" name="apartment_number" min-length="2" placeholder="Apartment number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>House number <span>*</span></p>
                                         <input type="text" id="house_number" name="house_number" min-length="2" placeholder="House number" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Postcode/Zip <span>*</span></p>
                                    <input type="text" id="postcode" name="postcode" min-length="5" placeholder="Post code" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Town/City <span>*</span></p>
                                    <input type="text" id="city" name="city" min-length="3" placeholder="City" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>State <span>*</span></p>
                                    <input type="text" id="state" name="state" min-length="3" placeholder="State" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Country<span>*</span></p>
                                    <input type="text" id="country" name="country" min-length="3" placeholder="Country" required>
                                </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <div class="checkout__order">
                                <h5>Your order</h5>
                                <div class="checkout__order__product">
                                    <ul>
                                        <li>
                                            <span class="top__text">Products</span>
                                            <span class="top__text__right">Total</span>
                                        </li>
                                        <?php $total = 0 ?>
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                
                                        <li>{{ $details['quantity'] }}x {{ $details['name'] }} - {{ $details['size_of_product'] }}<span>$ {{ $details['prize'] * $details['quantity'] }}</span></li>
                                    
                                        @endforeach
                                            @endif
                                    </ul>
                                </div>
                                @foreach((array) session('cart') as $id => $details)
                                    <?php $total += $details['prize'] * $details['quantity'] ?>
                                @endforeach
                                <div class="checkout__order__total">
                                    <ul>
                                        <li>Subtotal <span>$ {{ $total }}</span></li>
                                        <li>Total <span>$ {{ number_format((float) 1.03 * $total, 2, '.', '') }}</span></li>
                                    </ul>
                                </div>
                                <div class="checkout__order__widget">
                                    
                                <button type="submit" class="site-btn place-order">Place oder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->

@endsection
