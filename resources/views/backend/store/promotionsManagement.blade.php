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
                                  
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small add-promotion">
                                            <i class="zmdi zmdi-plus"></i>add promotion</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class ="div_promotion">
                            
                                    <br><br>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="promotion-table" class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>promotion name</th>
                                                <th>size of promotion</th>
                                                <th>description</th>
                                                <th>start of promotion</th>
                                                <th>end of promotion</th>
                                                <th>number product</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($promotions_management as $singlerow)
                                            <tr id="editp-row-{{$singlerow->id_promotion}}" class="tr-shadow">
        
                                                <td>{{$singlerow->name_of_promotion}}</td>
                                                <td>{{$singlerow->size_of_promotion}}</td>
                                                <td>{{$singlerow->description}}</td>
                                                <td class="desc">{{$singlerow->promotion_start_date}}</td>
                                                <td>{{$singlerow->promotion_end_date}}</td>
                                                <td>{{$singlerow->id_product}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                          
                                                            <button class="item edit-promotion" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                          

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
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
    </div>
</div>
@endsection

<!-- Main JS-->
<script src="{{ asset('js/merged.js') }}"></script>
<!-- Move preloader function JS-->
<script src="js/main.js"></script>