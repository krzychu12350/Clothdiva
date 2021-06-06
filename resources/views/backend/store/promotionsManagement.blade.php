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
                                    <!-- ADD PROMOTION -->
                                <form action="/action_page.php">
                                    <input type="text" id="pname" name="pname"> PROMOTION NAME <br><br>
                                    <input type="text" id="psize" name="psize">SIZE OF PROMOTION<br><br>
                                    <input type="text" id="pdesc" name="pdesc">DESCRIPTION<br><br>
                                    <input type="text" id="pstart" name="pstart">START OF PROMOTION<br><br>
                                    <input type="text" id="pend" name="pend">END OF PROMOTION<br><br>
                                     <input type="text" id="pnumber" name="pnumber">NUMBER PRODUCT<br><br>
                                     <button class="au-btn au-btn-icon au-btn--green au-btn--small button_add_promotion " onclick = "display()">
                                            <i class="zmdi zmdi-plus"></i>add</button>
                                    </div>
                                    <br><br>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="table-promotion"class="table table-data2">
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
                                            <tr class="tr-shadow">
                                                <td>{{$singlerow->name_of_promotion}}</td>
                                                <td>{{$singlerow->size_of_promotion}}</td>
                                                <td>{{$singlerow->description}}</td>
                                                <td class="desc">{{$singlerow->promotion_start_date}}</td>
                                                <td>{{$singlerow->promotion_end_date}}</td>
                                                <td>{{$singlerow->id_product}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item edit_button" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
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