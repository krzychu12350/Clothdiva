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
                                       
                                               <button class="au-btn au-btn-icon au-btn--green au-btn--small float-right add-subcategories">
                                                <i class="zmdi zmdi-plus"></i>add subcategories</button>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table id="subcategories-table" class="table">
                                            <thead>
                                                <tr>
                                                    <td>Subcategory</td>
                                                    <td>Category</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        
                                            @foreach($scmanagement as $singlerow)
                                                <tr>
                                                    <td>
                                                        <div class="table-data__info">
                                                      
                                                            <h6>{{$singlerow->name_of_subcategory}}</h6>
                                                         
                                                          
                                                        </div>
                                                    </td>
                                        
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">{{$singlerow->name_of_category}}</option>
                                                                @foreach($all_categories as $category)
                                                             
                                                                @if($category->name_of_category !== $singlerow->name_of_category)
                                                                <option value="">
                                                                    {{$category->name_of_category}}
                                                                </option>
                                                                @endif
                                                           
                                                                @endforeach    
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                 
                                                    <div class="table-data-feature">
                                                    
                                                        <a class="favdel" href="{{ route('admin.store.subcategories.destroy',['subcat_name' => $singlerow->name_of_subcategory,'cat_name' => $category->name_of_category]) }}">
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
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
    </div>
</div>
@endsection