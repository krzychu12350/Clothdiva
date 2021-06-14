@extends('layouts.admin')
@section('orderssection')
<div class="container">
    <div class="row justify-content-center">
       <h2>Users management</h2>
       <!-- USER DATA-->
       <div class="user-data m-b-30 m-t-30 col-xl-12">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Users</h3>
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
                                    
                                    </div>
                                    <div class="table-responsive table-data">

                                    <form method="POST" action="{{ route('admin.user.create')}}" id="addu">
                                        @csrf
                                    </form>
                                    <form method="POST" action="{{ route('admin.user.update')}}" id="editu">
                                        @csrf
                                    </form>
                                        <table id="users-table" class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <td class="d-none">id user</td>
                                                    <td>name</td>
                                                    <td>surname</td>
                                                    <td>mobile</td>
                                                    <td>e-mail</td>
                                                    <td>role</td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($users_data as $singlerow)
                                                <tr id="editu-row-{{$singlerow->id_ushop}}">
                    
                                                    <td id="id-u" class="id_ushop d-none">
                                                        {{$singlerow->id_ushop}}
                                                    </td>

                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>{{$singlerow->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>{{$singlerow->surname}}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>{{$singlerow->mobile}}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>{{$singlerow->email}}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role {{$singlerow->role_name}}">{{$singlerow->role_name}}</span>
                                                    </td>
                                                   
                                                    <td>
                                                        <div class="table-data-feature">
                                                        
                                                        
                                                        <button class="item edit-user" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                

                                                        <a class="userdel" href="{{ route('admin.user.destroy',['id_user' => $singlerow->id_ushop]) }}">
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
                            
    </div>
</div>
@endsection