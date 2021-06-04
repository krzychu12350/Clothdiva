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
                                        
                                        
                                            <tr>
                                                <td></td>
                                                <td>Men</td>
                                                <td>Black jacket</td>
                                                <td>-</td>
                                                <td class="process">Processed</td>
                                                <td>79.99 PLN</td>
                                            
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
                                       
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
    </div>
</div>
@endsection