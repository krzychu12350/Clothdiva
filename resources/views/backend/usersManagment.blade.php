@extends('layouts.admin')
@section('orderssection')
<div class="container">
    <div class="row justify-content-center">
       <h2>Users management</h2>
       <!-- USER DATA-->
       <div class="user-data m-b-30 m-t-30 col-xl-12">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                       
                                                <option selected="selected">All </option>
                                                @foreach($users_roles as $users_role)
                                                <option value="">{{$users_role->role_name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                       <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>-->
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <!--<td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>-->
                                                    <td>name</td>
                                                    <td>role</td>
                                              
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($users_data as $singlerow)
                                                <tr>
                                                    <!-- <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td> -->
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>{{$singlerow->name}} {{$singlerow->surname}}</h6>
                                                             <span>
                                                             {{$singlerow->email}}
                                                            </span> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role {{$singlerow->role_name}}">{{$singlerow->role_name}}</span>
                                                    </td>
                                                    <!--<td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>-->
                                                   <!-- <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>-->
                                                        <!--<div class="table-data__info">
                                                            <h6>User</h6>
                                                            <span>
                                                                <a href="#">user@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user">user</span>
                                                    </td> -->
                                                    <!--<td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>-->
                                                    <td>
                                                    <!--
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>-->
                                                        <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <a href="{{ route('home') }}"
                                                     onclick="event.preventDefault();
                                                     document.getElementById('subcatdel-form').submit();">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <!-- wywołanie procedury po nacisnieciu tego przycisku -->

                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                        <form id="subcatdel-form" action="{{ route('home') }}" method="POST" class="d-none">
                                                        @csrf
                                                        </form>
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
                            
    </div>
</div>
@endsection