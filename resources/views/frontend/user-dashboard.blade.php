@extends('layouts.app')
@section('content')


<section>
<div class="col-lg-12 col-md-12 mt-4 d-flex justify-content-center">
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h2 class="text-center mt-2 mb-4">Your orders</h2>
        <div class="dashboard-div mt-4">
   
        <table class="table table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Status</th>
      <th scope="col">Date of placing order</th>
      <th scope="col">Payment method</th>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Color</th>
      <th scope="col">Size</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $i=1;
    ?>
  @foreach($user_orders as $single_info) 
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$single_info->status}}</td>
      <td>{{$single_info->date_of_placing_order}}</td>
      <td>{{$single_info->payment_method}}</td>
      <td>{{$single_info->name}}</td>
      <td>Ilosc sztuk</td>
      <td>{{$single_info->prize}}</td>
      <td>{{$single_info->color}}</td>
      <td>{{$single_info->size_of_product}}</td>
    </tr>
    <?php
    $i++;
    ?>
    @endforeach
  </tbody>
</table> 
</div>   
    <h2 class="text-center mt-2 mb-4">Account information</h2>
        <div class="dashboard-div mt-4 w-50 float-left text-center">
            @foreach($user_data as $single_info) 
                <h5 class="mt-4">NAME<h5>
                <p>{{$single_info->name}}  {{$single_info->surname}}</p>
                <h5>MOBILE<h5>
                <p>{{$single_info->mobile}}</p>
                <h5>E-MAIL<h5>
                <p>{{$single_info->email}}</p><br />
            @endforeach
        </div>

        <div class="dashboard-div mt-4 w-50 float-left text-center">
        @foreach($user_data as $single_info) 
        <h5 class="mt-4">ADDRESS DETAILS</h5>
                <p>{{$single_info->name_of_street}}
                    {{$single_info->apartment_number}}
                    {{$single_info->house_number}}<br />
                    {{$single_info->post_code}}
                    {{$single_info->name_of_city}}</p>
            @endforeach
        </div>
        
        </div>
    </div>
    </div>
</div>
 
</section>
@endsection
