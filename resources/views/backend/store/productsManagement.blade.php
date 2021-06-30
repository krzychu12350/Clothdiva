@extends('layouts.admin')
@section('orderssection')
<div class="container">
    <div class="row">
    <div class="row justify-content-center">
    <h2 class="text-center">Products management</h2>
                            <div class="col-md-12 m-t-30">
                                <!-- DATA TABLE-->
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
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small add-product">
                                            <i class="zmdi zmdi-plus"></i>add product</button>
                                            <script>
                                           var subcat = <?php echo json_encode($combined); ?>;
                                        
                                            </script>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                             
                                <form method="POST" action="{{ route('admin.store.product.create')}}" id="addprod" enctype="multipart/form-data">
                                    @csrf
                                    </form>
                                    <form method="POST" action="{{ route('admin.store.product.update')}}" id="editprod">
                                        @csrf
                                    </form>
                                    <table id="products-table" class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>name</th>
                                                <th>quantity</th>
                                                <th>image</th>
                                                <th>prize</th>
                                                <th>color</th>
                                                <th>size</th>
                                                <th>description</th>
                                                <th>composition and conservation</th>
                                                <th>category</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="products-table">

                                        @foreach($products_management as $singlerow)
                                         
                                            <tr class="tr-shadow" id="editprod-row-{{$singlerow->id_product}}">
                                                <td class="d-none">{{$singlerow->id_product}}</td>
                                                <td>{{$singlerow->name}}</td>
                                                <td>{{$singlerow->quantity}}</td>
                                                <td>
                                                   <img src="{{$singlerow->image_src}}.jpg"></img>
                                                </td>
                                                <td class="desc">{{$singlerow->prize}}</td>
                                                <td>{{$singlerow->color}}</td>
                                                <td>
                                                    <span class="status--denied">{{$singlerow->size_of_product}}</span>
                                                </td>
                                                <td>{{$singlerow->description}}</td>
                                                <td>{{$singlerow->composition}}</td>
                                                <td>{{$singlerow->name_of_category}} {{$singlerow->name_of_subcategory}}</td>
                                                <td>
                                                    <div class="table-data-feature">
    
                                                    <button class="item edit-product" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>

                                                        <a class="proddel" 
                                                        href="{{ route('admin.store.product.destroy',['idproduct'=>$singlerow->id_product])}}">
                                                        <button class="item">
                                                        <i class="zmdi zmdi-delete"></i>
                                                        </button>

                                                    </div>
                                                </td>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                     <!-- END DATA TABLE -->
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
    </div>
</div>
@endsection