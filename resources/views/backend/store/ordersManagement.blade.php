@extends('layouts.admin')
@section('orderssection')
<div class="container">
    <div class="row justify-content-center">
    <h2 style="margin-bottom: 20px;">Orders management</h2>
 <!-- DATA TABLE-->
 <div class="table-responsive m-b-40">
   
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Order number</th>
                                                <th>Name of product</th>
                                                <th>Status</th>
                                                <th>Date of placing order</th>
                                                <th>Payment method</th>
                                                <th>Name client</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            @foreach($orders_management as $singlerow)
                                            <tr>
                                                <td>{{$singlerow->id_order}}</td>
                                                <td>Men</td>
                                                <td>{{$singlerow->status}}</td>
                                                <td>{{$singlerow->date_of_placing_order}}</td>
                                                <td class="process">{{$singlerow->payment_method}}</td>
                                                <td>{{$singlerow->name}} {{$singlerow->surname}}</td>
                                            
                                            <td>
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
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
    </div>
</div>
@endsection