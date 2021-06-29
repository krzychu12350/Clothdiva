@extends('layouts.admin')
@section('orderssection')
<div class="container">
    <div class="row justify-content-center">
    <h2 class="text-center">Slider management</h2>
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
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small add-slidee">
                                            <i class="zmdi zmdi-plus"></i>add slide</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                <form method="POST" action="{{ route('admin.slider.create')}}" id="addslider" enctype="multipart/form-data">
                                    @csrf
                                    </form>
                                    <form method="POST" action="{{ route('admin.slider.update')}}" id="editslide" enctype="multipart/form-data">
                                        @csrf
                                    </form>
                                    <table id="banner-table" class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th class="d-none">id slide</th>
                                                <th>image</th>
                                                <th>paragraph large</th>
                                                <th>paragraph small</th>
                                                <th>link</th>
                                                <th>link description</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="banner-table">

                                        @foreach($banner_sliders as $singlerow)
                                         
                                            <tr class="tr-shadow" id="editslide-row-{{$singlerow->id_banner_image}}">
                                               
                                                <td id="id-s" class="d-none">{{$singlerow->id_banner_image}}</td>
                                                <td>
                                                   <img src="{{$singlerow->path_to_image}}"></img>
                                                </td>
                                                <td id="p-large" class="desc">{{$singlerow->paragraph_large}}</td>
                                                <td id="p-small">{{$singlerow->paragraph_small}}</td>
                                                <td>
                                                    <span id="l-href" class="status--denied">{{$singlerow->link_href}}</span>
                                                </td>
                                                <td id="l-desc">{{$singlerow->link_desc}}</td>
                                                <td>
                                                    <div class="table-data-feature">
    
                                                        <button class="item edit-slide" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>

                                                        <a class="slidedel" href="{{ route('admin.slider.delete',['id_banner_image' => $singlerow->id_banner_image]) }}">
                                                            <button class="item">
                                                            <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </a>
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