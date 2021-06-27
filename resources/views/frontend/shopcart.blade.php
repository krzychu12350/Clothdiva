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
    @if(count((array) session('cart')) == 0)
    <div class="text-center mt-4"> Cart is empty </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
            <div class="cart__btn text-center">
                <a href="{{ route('home')}}">Continue Shopping</a>
             </div>
        </div>
              
    </div>

    @else
    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table id="cart">
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
                         
                            <?php 
                            $total = 0;
                            $i=0;
                            //  @if(session('cart'))
                            ?>
                                
                                @foreach(session('cart') as $id => $details)
                                    <?php $total += $details['prize'] * $details['quantity'] 
                                    ?>
                                <tr id="{{ $i }}">
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
                                    <td class="cart__close" data-id="{{ $id }}">
                                    <a class="remove-from-cart" data-id="{{ $id }}"><span class="icon_close"></span></a>
                                    <!-- <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>-->
                                    <!--<a class="d-none" id="update-product-{{ $id }}" data-id="{{ $id }}"><span class="icon_loading"></span></a>-->
                                    
                                    </td>
                                </tr>
                                <?php
                                 $i++;
                                ?>
                            @endforeach
                            </tbody>
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
                    <div class="cart__btn update__btn" style="cursor: pointer">
                        <!--<a class="update-cart quantity" data-id="{{ $id }}"><span class="icon_loading"></span>
                           Update cart</a>-->
                        <a class="update-cart-all"><span class="icon_loading"></span>
                           Update cart</a>
                        
                 
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
    @endif
    <!-- Shop Cart Section End -->
    
    @section('scripts')
    <script type="text/javascript">
          $(".update-cart-all").click(function (e) {
           
            $("#cart > tbody > tr").each(function (i, row) {
            var q = $("tr#" + i + " td > div > input").val();
           // alert(q);
   
           var pid = $("tr#" + i + " td:nth-child(5)").attr("data-id");
           ///alert(pid);
         
           // alert(i, row);
            //$('#product-1').trigger('click');
            // alert($("#cart > tbody > tr#" + i).attr('id'));
            //alert($("a.remove-from-cart").attr("data-id"));

           // e.preventDefault();
           //var ele = $(this);
           //alert(find("#quantity").val()); $("#quantity").val() ele.parents("tr").find(".quantity").val()
           
            $.ajax({
               url: '{{ url('/update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: pid, quantity: q},
               success: function (response) {
                   window.location.reload();
               }
            });


        });

        });

        /*
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
           //alert(find("#quantity").val()); $("#quantity").val() ele.parents("tr").find(".quantity").val()
            $.ajax({
               url: '{{ url('/update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: $("#quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });

        });*/

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