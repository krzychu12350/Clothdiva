@extends('layouts.app')
@section('contact')
<section>
    <div class="col-lg-12 col-md-12 mt-4">
                    <div class="row">
         
                  @foreach($products_from_search as $single_product) 
               
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item" href="/products/details/{{$single_product->id_product}}">
                                <div onclick='location.href="/products/details/{{$single_product->id_product}}"' style='cursor:pointer;' class="product__item__pic set-bg" data-setbg='{{ asset ("$single_product->image_src.jpg") }}'>
                                    <ul class="product__hover">
                                        <li><a href='{{ asset("$single_product->image_src.jpg") }}' class="image-popup"><span class="arrow_expand"></span></a></li>
                                     
                                        <li><a href="{{ route('add.favourite', ['id' =>$single_product->id_product]) }}"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="{{ url('add-to-cart/'.$single_product->id_product) }}"><span class="icon_cart_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/products/details/{{$single_product->id_product}}">{{$single_product->name}} - {{$single_product->size_of_product}}</a></h6>
                                    <div class="product__price">$ {{$single_product->prize}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
