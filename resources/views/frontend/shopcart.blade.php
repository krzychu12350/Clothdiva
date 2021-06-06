@extends('layouts.app')
@section('shopcart')

 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $total = 0 ?>
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <?php $total += $details['prize'] * $details['quantity'] ?>
                                <tr>
                                    <td class="cart__product__item">
                                        <a href="/products/details/{{ $details['id_product'] }}"> 
                                            <img src="{{ $details['image'] }}.jpg" alt="">
                                        </a>
                                        <div class="cart__product__item__title">
                                           <a href="/products/details/{{ $details['id_product'] }}"> 
                                                <h6>{{ $details['name'] }} - {{ $details['size_of_product'] }}</h6>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ {{ $details['prize'] }}</td>
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input id="quantity" type="text" value="{{ $details['quantity'] }}">
                                        </div>
                                    </td>
                                    <td class="cart__total">$ {{ $details['prize'] * $details['quantity'] }} </td>
                                    <td class="cart__close">
                                    <a class="remove-from-cart" data-id="{{ $id }}"><span class="icon_close"></span></a>
                             
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="{{ route('home')}}">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                   
                        <a href="#" class="update-cart" data-id="{{ $id }}"><span class="icon_loading"></span> Update cart</a>
                        <!--<button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>-->
                    </div>
                </div>
            </div>
            <div class="row">
            
                <div class="col-lg-6">     <!--
                    <div class="discount__content">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">Apply</button>
                        </form>
                    </div>-->
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ {{ $total }}</span></li>
                            <li>Total <span>$ {{ number_format((float) 1.03 * $total, 2, '.', '') }}</span></li>
                        </ul>
                        <a href="{{ route('checkout')}}"checkout class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->
    
    @section('scripts')
    <script type="text/javascript">
        
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
           //alert(find("#quantity").val());
            $.ajax({
               url: '{{ url('/update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: $("#quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure to remove this product from shop cart?")) {
                $.ajax({
                    url: '{{ url('/remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

        /*
        $(".deleteRecord").click(function(){

        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
      
            $.ajax(
            {
                url: "remove-from-cart/"+id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                /*
                success: function (){
                    alert("it Works");
                }
            });
        });*/
        
    </script>
@endsection

@endsection