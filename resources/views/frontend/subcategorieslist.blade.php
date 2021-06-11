
        <div class = "women_products position-absolute bg-white col-xl-6 text-center" style = "display:none; right: 25%; margin: auto;">    
                <div class="container">
                        <div class="row">
                            <?php $k = 1 ?>
                            @foreach($sub_categories_women as $sub_category_woman)
                            <div class="col-2 mx-auto">     
                            <ul class = "submenu-submenu list-unstyled" style = "text-align:center">
                            <img src="img\categories_women\women_cat_{{$k}}.jpg">
                                <li class = "menu-item level-2"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Women','subcategory'=> $sub_category_woman->name_of_subcategory]) }}">{{$sub_category_woman->name_of_subcategory}}</a></li>
                                <!-- href="{{ route('showProducts',['type'=> 'Women','subcategory'=> $sub_category_woman->name_of_subcategory]) }}" -->
                                </ul>
                            </div>
                            <?php $k++ ?>
                            @endforeach
                        </div>
                    </div>
                </div>


         <div class = "men_products position-absolute bg-white col-xl-6 text-center" style = "display:none; right: 25%; margin: auto;">
                <div class="container">
                    <div class="row">
                    <?php $i = 1 ?>
                    @foreach($sub_categories_men as $sub_category_man)
                    <div class="col-2 mx-auto">     
                    <ul class = "submenu-submenu list-unstyled" style = "text-align:center">
                    <img src="img\categories_men\men_cat_{{$i}}.jpg">
                    <li class = "menu-item level-2"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Men','subcategory'=> $sub_category_man->name_of_subcategory]) }}">{{$sub_category_man->name_of_subcategory}}</a></li>
                    </ul>
                    </div>
                    <?php $i++ ?>
                     @endforeach
                    </div>
                </div>
         </div>
         <div class = "girls_products position-absolute bg-white col-xl-6 text-center" style = "display:none; right: 25%; margin: auto;">
            <div class="container">
                    <div class="row">
                    <?php $g = 1 ?>
                    @foreach($sub_categories_girls as $sub_category_girl)
                    <div class="col-2 mx-auto">  
                    <ul class = "submenu-submenu list-unstyled" style = "text-align:center">
                    <img src="img\categories_girls\girls_cat_{{$g}}.jpg">
                     <li class = "menu-item level-2"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Girls','subcategory'=> $sub_category_girl->name_of_subcategory]) }}">{{$sub_category_girl->name_of_subcategory}}</a></li>
                     </ul>
                    </div>
                    <?php $g++ ?>
                     @endforeach
                    </div>
            </div>
         </div>

         <div class = "boys_products position-absolute bg-white col-xl-6 text-center" style = "display:none; right: 25%; margin: auto;">
            <div class="container">
                    <div class="row">
                    <?php $b = 1 ?>
                     @foreach($sub_categories_boys as $sub_category_boy)
                     <div class="col-2 mx-auto">    
                     <ul class = "submenu-submenu list-unstyled" style = "text-align:center">
                     <img src="img\categories_boys\boys_cat_{{$b}}.jpg">
                    <li class = "menu-item level-2"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Boys','subcategory'=> $sub_category_boy->name_of_subcategory]) }}">{{$sub_category_boy->name_of_subcategory}}</a></li>
                    </ul>
                    </div>
                    <?php $b++ ?>
                     @endforeach
                    </div>
            </div>
         </div>


