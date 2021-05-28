@extends('layouts.admin')
@section('orderssection')
<div class="container">
    <div class="row justify-content-center">
       <h2 class="text-center">Subcategories management</h2>
       <!-- USER DATA-->
       <div class="user-data m-b-30 m-t-30 col-xl-12">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Subcategories</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                              
                                                <option selected="selected">All</option>
                                                @foreach($all_categories as $category)
                                                <option value="">{{$category->name_of_category}}</option>
                                                @endforeach    
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                       
                                               <button class="au-btn au-btn-icon au-btn--green au-btn--small float-right">
                                                <i class="zmdi zmdi-plus"></i>add subcategories</button>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
<<<<<<< HEAD
                                                    <td>Subcategory</td>
                                                    <!--<td>Category</td>-->
                                                    <td>Category</td>
=======
                                                    <td>name</td>
                                                   <!-- <td>role</td>
                                                    <td>type</td> -->
>>>>>>> 1214806 (dbmod)
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        
                                            @foreach($scmanagement as $singlerow)
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
<<<<<<< HEAD
                                                      
                                                            <h6>{{$singlerow->name_of_subcategory}}</h6>
                                                            <!--
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>-->
                                                          
                                                        </div>
                                                    </td>
                                                    <!--
                                                    <td>
=======
                                                            <h6>Jeans</h6>
                                                        </div>
                                                    </td>
                                                   <!-- <td>
>>>>>>> 1214806 (dbmod)
                                                        <span class="role admin">admin</span>
                                                    </td>
                                                    -->
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
<<<<<<< HEAD
                                                                <option selected="selected">{{$singlerow->name_of_category}}</option>
                                                                @foreach($all_categories as $category)
                                                             
                                                                @if($category->name_of_category !== $singlerow->name_of_category)
                                                                <option value="">
                                                                {{$category->name_of_category}}
                                                                </option>
                                                                @endif
                                                           
                                                                @endforeach    
=======
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>-->
                                                <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Shorts</h6>
                                                        </div>
                                                    </td>
                                                    <!--<td>
                                                        <span class="role user">user</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr> -->
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Sneakers</h6>                                   
                                                        </div>
                                                    </td>
                                                    <!--<td>
                                                        <span class="role user">user</span>
                                                    </td>
                                                    
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
>>>>>>> 1214806 (dbmod)
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
<<<<<<< HEAD
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                </tr>
                                                @endforeach
                                          
=======
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td> 
                                                </tr> -->
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Suits</h6>
                                                        </div>
                                                    </td>

                                                    <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Flats</h6>
                                                        </div>
                                                    </td>

                                                    <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Leather</h6>
                                                        </div>
                                                    </td>

                                                    <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Shoes</h6>
                                                        </div>
                                                    </td>

                                                    <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Dresses</h6>
                                                        </div>
                                                    </td>

                                                    <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Bags</h6>
                                                        </div>
                                                    </td>

                                                    <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Jackets</h6>
                                                        </div>
                                                    </td>

                                                    <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Caps</h6>
                                                        </div>
                                                    </td>

                                                    <tr> 
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>T-Shirts</h6>
                                                        </div>
                                                    </td>
                                                    <!--<td>
                                                        <span class="role member">member</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr> -->
>>>>>>> 1214806 (dbmod)
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
    </div>
</div>
@endsection