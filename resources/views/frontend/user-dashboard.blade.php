@extends('layouts.app')
@section('content')


<section>
<div class="col-lg-12 col-md-12 mt-4 d-flex justify-content-center">
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h2 class="text-center mt-2 mb-4">Your orders</h2>
        @if($user_orders->isNotEmpty())
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
      <th scope="col">Order Value</th>
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
      <td>
      @foreach($order_products as $single_product) 
        {{$single_product->name}}<br />
      @endforeach
      </td><!--nazwa-->
      <td>
      @foreach($order_products as $single_product) 
        {{$single_product->quantity_order}}<br />
      @endforeach
      </td><!--ilosc-->
      <td>
      @foreach($order_products as $single_product) 
        {{$single_product->prize}}<br />
      @endforeach
      </td><!--prize-->
      <td>
      @foreach($order_products as $single_product) 
        {{$single_product->color}}<br />
      @endforeach
      </td><!--color-->
      <td>
      @foreach($order_products as $single_product) 
        {{$single_product->size_of_product}}<br />
      @endforeach
      </td><!--size-->
      <td>{{$single_info->order_value}}</td>
    </tr>
    <?php
    $i++;
    ?>
    @endforeach
  </tbody>
</table> 
</div>   
@else
  <p class="text-center">You haven't ordered anything yet</p>
@endif

    <h2 class="text-center mt-2 mb-4">Account information</h2>
    <form action="{{ route('update.account') }}" method="POST">
        @csrf
        <div class="dashboard-div mt-4 text-center user-data">
        <a class="float-right mt-2 mr-2 edit-user-data"><i class="fas fa-user-edit" role="button"></i></a><br />
            @foreach($user_data as $single_info) 
            <h5 class="mt-4">YOUR ACCOUNT DATA</h5>
                <h6 class="mt-4">Name<h6>
                <p class="user-name">{{$single_info->name}}</p>
                <h6>Surname<h6>
                <p class="user-surname">{{$single_info->surname}}</p>
                <h6>Mobile<h6>
                <p class="user-mobile">{{$single_info->mobile}}</p>
                <h6>E-mail<h6>
                <p class="user-email">{{$single_info->email}}</p><br />
            @endforeach

        </div>
        </form>

        <form id="update-address-data" action="{{ route('update.address.data') }}" method="POST">
        @csrf
        </form>

        <form id="add-address-data" action="{{ route('add.address.data') }}" method="POST">
        @csrf
        </form>
        <div class="dashboard-div mt-4 text-center user-address-data">
  
        @if($user_data_addr->isNotEmpty())
        <a class="float-right mt-2 mr-2 edit-user-address-data"><i class="fas fa-cog" role="button"></i></a><br />
        @foreach($user_data as $single_info) 
        <h5 class="mt-4">ADDRESS DETAILS</h5>
                <h6 class="mt-4">Street<h6>
                <p class="name-of-street">{{$single_info->name_of_street}}</p>
                <h6>Apartment number<h6>
                <p class="apartment-number">{{$single_info->apartment_number}}</p>
                <h6>House number<h6>
                <p class="house-number">{{$single_info->house_number}}</p>
                <h6>Post_code<h6>
                <p class="post-code">{{$single_info->post_code}}</p>
                <h6>City<h6>
                <p class="name-of-city">{{$single_info->name_of_city}}</p>
                <h6>State<h6>
                <p class="name-of-state">{{$single_info->county}}</p>
            @endforeach
          @else
              <a id="add-icon" class="text-center mt-2 mr-2 add-user-address-data"><i class="fas fa-plus" role="button"></i></a><br />
              <h6 id="add-desc" class="text-center mt-4 mb-4">Add your address details </h6>
          @endif
        </div>
     
        </div>
    </div>
    </div>
</div>
 
</section>
@endsection
