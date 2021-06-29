@extends('layouts.admin')
@section('orderssection')
<div class="container">
    <div class="row justify-content-center">
    <h2 class="text-center">Promotions management</h2>
                            <div class="col-md-12 m-t-30">
                                <!-- DATA TABLE-->
                                <!--<h1 class="m-b-35 text-center">Promotions</h1>-->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-data__tool-right">
                                  
<<<<<<< HEAD
<<<<<<< HEAD
                                    
=======
                                       
>>>>>>> 47e3ffa (l)
=======
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small float-right add-promotion">
                                                <i class="zmdi zmdi-plus"></i>add promotion</button>

>>>>>>> c65ee22cfbdbf48c1946d6545915bea5af09be9c
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class ="div_promotion">
                                    <br><br>
                                <div class="table-responsive table-responsive-data2">
                                <form method="POST" action="{{ route('admin.promotion.create')}}" id="addp">
                                    @csrf
                                </form>
                                <form method="POST" action="{{ route('admin.promotion.update')}}" id="editp">
                                    @csrf
                                </form>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="promotion-table" class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th class="d-none"></th>
                                                <th>promotion name</th>
                                                <th>size of promotion</th>
                                                <th>description</th>
                                                <th>start of promotion</th>
                                                <th>end of promotion</th>
                                                 <!-- <th>number product</th>-->
                                                <th>category</th>
                                                <th>subcategory</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($promotions_management as $singlerow)
                                          
                                            <tr id="editp-row-{{$singlerow->id_promotion}}" class="tr-shadow">
                                                <td id="id-p" class="d-none">{{$singlerow->id_promotion}}</td>
                                                <td>{{$singlerow->name_of_promotion}}</td>
                                                <td>{{$singlerow->size_of_promotion}}</td>
                                                <td>{{$singlerow->description}}</td>
                                                <td class="desc">{{$singlerow->promotion_start_date}}</td>
                                                <td>{{$singlerow->promotion_end_date}}</td>
                                                <!--<td>{{$singlerow->id_product}}</td>-->
                                                <td>{{$singlerow->name_of_category}}</td>
                                                <td>{{$singlerow->name_of_subcategory}}</td>
                                                <td>
<<<<<<< HEAD
                                                    <div class="table-data-feature">
                                                       
=======
                                                  
>>>>>>> 47e3ffa (l)
                                                          

                                                            <a class="promotiondel" href="{{ route('admin.promotion.destroy',['id_promotion' => $singlerow->id_promotion]) }}">
                                                            <button class="item">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                            </a>
                                                        </div>
                                                </td>
                                            </tr>
                                            @endforeach 
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
    </div>
</div>
@endsection
