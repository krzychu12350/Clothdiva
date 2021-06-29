@extends('layouts.admin')
@section('orderssection')
<div class="container">
    <div class="row justify-content-center">
    <h2 style="margin-bottom: 20px;">Orders management</h2>
 <!-- DATA TABLE-->
 <div class="table-responsive m-b-40">
                                <!--
                                 <form method="POST" action="{{ route('admin.store.order.create')}}" id="addo">
                                    @csrf
                                </form>
                                -->
                                <form method="POST" action="{{ route('admin.store.order.update')}}" id="order-update">
                                        @csrf
                                    </form>
                                  
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Products Id</th>
                                                <th>Name of products</th>
                                                <th>Quantity</th>
                                                <th>Order Value</th>
                                                <th>Status</th>
                                                <th>Date of placing order</th>
                                                <th>Payment method</th>
                                                <th>Client name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $id_order = $top_order_id[0]->id_order;
                                            ?>

                                            @foreach($orders as $singlerow)
                                            <tr id="editp-row-{{$singlerow->id_order}}">
                                          
                                                <td id="id-o" >{{$singlerow->id_order}} </td>

                                                <td>
                                                    @foreach($order_products as $singleproduct)
                                                    @if($singleproduct->id_order == $id_order)
                                                        {{$singleproduct->id_product}}<br />
                                                    @endif    
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($order_products as $singleproduct)
                                                    @if($singleproduct->id_order == $id_order)
                                                        {{$singleproduct->name}}<br />
                                                    @endif    
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($order_products as $singleproduct)
                                                    @if($singleproduct->id_order == $id_order)
                                                        {{$singleproduct->quantity_order}}<br />
                                                    @endif   
                                                    @endforeach
                                                </td>
                                                <td>
                                                {{$singlerow->order_value}}
                                                </td>
                                                <td>
                                                  <div class="rs-select2--trans rs-select2--sm">
                                                                <input type="hidden" form="order-update" name="order-id" value="{{$singlerow->id_order}}"></input>
                                                                <select class="form-control" id="selectOption" name='selectOption' form="order-update">
                                                                    <option value="{{$singlerow->status}}">{{$singlerow->status}}</option>
                                                                    <option value="In progress"> In progress</option>
                                                                    <option value="Picked up by the courier">Picked up by the courier</option>
                                                                    <option value="Sent">Sent</option>
                                            
                                                             
                                                                    <!--
                                                                    @foreach($status as $single)
                                                                    
                                                                    @if($single->status !== $singlerow->status)
                                                                    <option value="{{$single->status}}">{{$single->status}}</option>
                                                                    @endif
                                                                   
                                                                    @endforeach
                                                                    -->

                                                                </select>
                                                    <?php
                                                      // echo Form::select('size', array('L' => 'Large', 'S' => $singlerow->status),'S');
                                                    ?>
                                                   <div class="dropDownSelect2"></div>
                                                </div>
                                                </td>
                                                <td>{{$singlerow->date_of_placing_order}}</td>
                                                <td class="process">{{$singlerow->payment_method}}</td>
                                                <td>{{$singlerow->name}} {{$singlerow->surname}}</td>
                                                <td>
<<<<<<< HEAD
                                        
=======
                                                    <div class="table-data-feature">
                                                        <a class="order-update" href="{{ route('admin.store.order.update') }}">
                                                        <button type="submit" form="order-update" class="item edit-order" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        </a>
>>>>>>> c65ee22cfbdbf48c1946d6545915bea5af09be9c
                                                    

                                                        <a class="orderdel" href="{{ route('admin.store.order.destroy',['id_o' => $singlerow->id_order]) }}">
                                                        <button class="item">
                                                        <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                    </div>
                                                </td>
                                                </tr>
                                                <?php
                                                $id_order++;
                                                ?>
                                                @endforeach
                                        </tbody>
                                    </table>
                                    <form method="GET" action="{{ route('admin.store.order.update')}}" id="edito">
                                    @csrf
                                    </form>
                                </div>
                                <!-- END DATA TABLE-->
    </div>
</div>
@endsection