<?php
use Illuminate\Support\Facades\Storage;
?>
@extends('layouts.app')
@section('shop')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#collapseOne">Women</a>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <!--
                                             @foreach($sub_categories_men as $sub_category_man)
            <ul class = "submenu-submenu" style = "text-align:center">
                <li class = "menu-item level-2" style = "display: block;">{{$sub_category_man->name_of_subcategory}}</li>
            </ul>
            @endforeach-->
                                                <ul>
                                                    @foreach($sub_categories_women as $sub_category_woman)
                                                    <li><a href="{{ route('showProducts',['type'=> 'Women','subcategory'=> $sub_category_woman->name_of_subcategory]) }}">{{$sub_category_woman->name_of_subcategory}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseTwo">Men</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    @foreach($sub_categories_men as $sub_category_man)
                                                    <li><a href="{{ route('showProducts',['type'=> 'Men','subcategory'=> $sub_category_man->name_of_subcategory]) }}">{{$sub_category_man->name_of_subcategory}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseThree">Girls</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    @foreach($sub_categories_girls as $sub_category_girl)
                                                    <li><a href="{{ route('showProducts',['type'=> 'Girls','subcategory'=> $sub_category_girl->name_of_subcategory]) }}" >{{$sub_category_girl->name_of_subcategory}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Boys</a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    @foreach($sub_categories_boys as $sub_category_boy)
                                                    <li><a href="{{ route('showProducts',['type'=> 'Boys','subcategory'=> $sub_category_boy->name_of_subcategory]) }}">{{$sub_category_boy->name_of_subcategory}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__filter">
                            <div class="section-title">
                                <h4>Shop by price</h4>
                            </div>
                            <div class="filter-range-wrap">
                              
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="{{$minPrize}}" data-max="{{$maxPrize}}"></div>
                                <div class="range-slider">
                                    <div class="price-input">

                                    <form id="filtr-by-prize" action="{{ route('shop.by.price') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                        <br />
                                        <p>Price:</p>
                                        <input type="text" name="min-amount" id="minamount" form="filtr-by-prize">$
                                        -
                                        <input type="text" name="max-amount" id="maxamount" form="filtr-by-prize">$
                                    </div>
                                </div>
                             
                            </div>
                            <br /><br />
                            <a form="filtr-by-prize" style="cursor:pointer" onclick="document.getElementById('filtr-by-prize').submit();">
                                Filter
                            </a>
                        </div>
                        <div class="sidebar__sizes">
                            <div class="section-title">
                                <h4>Shop by size</h4>
                            </div>
                            <div class="size__list">
                                <?php
                                 $category = Session::get('category');
                                 $subcategory = Session::get('subcategory');
                                ?>
                                
                               
                            <form method="get" action="/productsbySize/{{$category}}/{{$subcategory}}">
                                    @csrf
                               
                                @foreach( $all_sizes as $single_size) 
                                <label for="{{$single_size->size_of_product}}">
                                    {{$single_size->size_of_product}}
                                   <input type="checkbox" id="{{$single_size->size_of_product}}" name="checked[]" value="{{$single_size->size_of_product}}">
                                   
                                    <span class="checkmark"></span>
                                </label>
                                @endforeach

                                <div class="sidebar__filter">
                                <div class="filter-range-wrap">
                                    <div class="range-slider">
                                    </div>
                                </div>
                                <!--<input type="submit">Send</a>-->
                                <a style="cursor: pointer;" onclick="this.closest('form').submit();return false;">Filter</a>
                          
                                </div>

                         
                                </form>
                                
                            
                               
                              
                            </div>
                          
                          
                        </div>
                        <div class="sidebar__color">
                            <div class="section-title">
                                <h4>Shop by color</h4>
                            </div>
                            <div class="size__list color__list">

                            <form method="post" id="filtr-by-color" action="/productsbyColor/{{$category}}/{{$subcategory}}">
                                    @csrf
                                    
                                @foreach($all_colors as $single_color) 
                                <label for="{{$single_color->color}}">
                                    {{$single_color->color}}
                                    <input type="checkbox" id="{{$single_color->color}}" form="filtr-by-color" name="checked-color[]" value="{{$single_color->color}}">
                                    <span class="checkmark"></span>
                                </label>
                                @endforeach
                            </div>
                            <div class="sidebar__filter">
                                <div class="filter-range-wrap">
                                    <div class="range-slider">
                                    </div>
                                </div>
                                <a style="cursor: pointer;" onclick="document.getElementById('filtr-by-color').submit();">Filter</a>
                            </div>

                            </form>

                        </div>
                    </div>
                </div>
               
         
                <div class="col-lg-9 col-md-9 products-wrapper">
                    <div class="row">
                        <?php
                         //$products_selection = DB::select("select products_selection() as products_selection from products FETCH FIRST 1 ROWS ONLY");
                         //$products_selection = $products_selection->toArray();
                         //$array = array_merge($products_selection,$image_for_product);
                         //dd($array);
                         //  @foreach ($array as $key=>$row)
                        //{{$key}}
                        //  @endforeach
                        //@foreach($products_selection as $single_product) 
                        //{{$single_product->id_product}}
                        //@endforeach
                        //@foreach($rows as $row=>$value) 
                      
                       // {{$value['id_product']}}
                   
               
                        // @endforeach
                        //dd($image_for_product);
                        ?>
                  
             
          
             

                  @foreach($products_shop_view as $single_product) 
           
                        <div class="col-lg-4 col-md-6 single-product">
                            <div class="product__item" href="/products/details/{{$single_product->id_product}}">
                                <div onclick='location.href="/products/details/{{$single_product->id_product}}"' style='cursor:pointer;' class="product__item__pic set-bg" data-setbg='{{ asset ("$single_product->image_src.jpg") }}'>
                                    <ul class="product__hover">
                                        <li><a href='{{ asset("$single_product->image_src.jpg") }}' class="image-popup"><span class="arrow_expand"></span></a></li>
                                     
                                        <li><a href="{{ route('add.favourite', ['id' =>$single_product->id_product]) }}"><span class="icon_heart_alt"></span></a></li>
                                        
                                        <li><a href="{{ route('addtoCart', ['id' =>$single_product->id_product,'quantity' => 1]) }}"><span class="icon_cart_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/products/details/{{$single_product->id_product}}">{{$single_product->name}} - {{$single_product->size_of_product}}</a></h6>

                                     <?php $promotion_price2 = number_format((float) $single_product->prize * (1.00 - $single_product->size_of_promotion/100), 2, '.', '') ; ?>

                                    <div class="product__price">                             
                                    @if($promotion_price2 != $single_product->prize)
                                        $ {{$promotion_price2}}
                                        <span>$ {{$single_product->prize}}</span>
                                    @else  
                                        $ {{$single_product->prize}}
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
               
                        @endforeach
                     
                     
                        <div class="col-lg-12 text-center">


                        {{ $products_shop_view->links('vendor.pagination.custom') }}
             
                          <!--  <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>-->

                        </div>
                                    

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection