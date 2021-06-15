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
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" id="fname" name="fname" min-length="3" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" id="lname" name="lname" min-length="3" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" id="phone" name="phone" min-length="3" equired>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" id="email" name="email" min-length="5" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>State <span>*</span></p>
                                    <input type="text" id="state" name="state" min-length="3" required>
                                </div>
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <input type="text" placeholder="Street Address" id="street" name="street" min-length="3" required>
                                    <input type="text" placeholder="Apartment. suite, unite ect ( optinal )" id="apartment_number" name="apartment_number" min-length="2" required>
                                </div>
                                <div class="checkout__form__input">
                                    <p>Postcode/Zip <span>*</span></p>
                                    <input type="text" id="postcode" name="postcode" min-length="5" required>
                                </div>
                                <div class="checkout__form__input">
                                    <p>Town/City <span>*</span></p>
                                    <input type="text" id="city" name="city" min-length="3" required>
                                </div>
                                <div class="checkout__form__input">
                                    <p>Country/State <span>*</span></p>
                                    <input type="text" id="country" name="country" min-length="3" required>
                                </div>
                            </div>
                            <!--
                            <div class="col-lg-12">
                                <div class="checkout__form__checkbox">
                                    <label for="acc">
                                        Create an acount?
                                        <input type="checkbox" id="acc">
                                        <span class="checkmark"></span>
                                    </label>
                                    <p>Create am acount by entering the information below. If you are a returing
                                        customer login at the <br />top of the page</p>
                                    </div>
                                    <div class="checkout__form__input">
                                        <p>Account Password <span>*</span></p>
                                        <input type="text">
                                    </div>
                                    <div class="checkout__form__checkbox">
                                        <label for="note">
                                            Note about your order, e.g, special noe for delivery
                                            <input type="checkbox" id="note">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__form__input">
                                        <p>Oder notes <span>*</span></p>
                                        <input type="text"
                                        placeholder="Note about your order, e.g, special noe for delivery">
                                    </div>
                                </div> -->
                            </div>
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
                                    <!--
                                    <label for="o-acc">
                                        Create an acount?
                                        <input type="checkbox" id="o-acc">
                                        <span class="checkmark"></span>
                                    </label>
                                    <p>Create am acount by entering the information below. If you are a returing customer
                                    login at the top of the page.</p>
                                </div>-->
                                <button type="submit" class="site-btn place-order">Place oder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->

@endsection
