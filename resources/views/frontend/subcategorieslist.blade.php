
        <div class = "women_products position-absolute bg-white col-xl-6 text-center" style = "display:none; right: 25%; margin: auto;">    
                <div class="container">
                        <div class="row">
                        <?php $i = 1 ?>
                            @foreach($sub_categories_women as $sub_category_woman)
                            <div class="col-3 mx-auto">     
                            <ul class = "submenu-submenu list-unstyled" style = "text-align:center">
                                <a style = "color:black" href="{{ route('showProducts',['type'=> 'Women','subcategory'=> $sub_category_woman->name_of_subcategory]) }}"><img src='images\subcategories\women\women<?php echo $i; ?>.jpg'></a>
                                <li class = "menu-item level-2"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Women','subcategory'=> $sub_category_woman->name_of_subcategory]) }}">{{$sub_category_woman->name_of_subcategory}}</a></li>
                                <!-- href="{{ route('showProducts',['type'=> 'Women','subcategory'=> $sub_category_woman->name_of_subcategory]) }}" -->
                                </ul>
                            </div>
                            <?php $i++ ?>
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
                    <img src="img\instagram\insta-{{$i}}.jpg">
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
                    @foreach($sub_categories_girls as $sub_category_girl)
                    <div class="col-2 mx-auto">  
                    <ul class = "submenu-submenu list-unstyled" style = "text-align:center">
                    <img src="img\instagram\insta-3.jpg">
                     <li class = "menu-item level-2"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Girls','subcategory'=> $sub_category_girl->name_of_subcategory]) }}">{{$sub_category_girl->name_of_subcategory}}</a></li>
                     </ul>
                    </div>
                     @endforeach
                    </div>
            </div>
         </div>

         <div class = "boys_products position-absolute bg-white col-xl-6 text-center" style = "display:none; right: 25%; margin: auto;">
            <div class="container">
                    <div class="row">
                     @foreach($sub_categories_boys as $sub_category_boy)
                     <div class="col-2 mx-auto">    
                     <ul class = "submenu-submenu list-unstyled" style = "text-align:center">
                     <img src="img\instagram\insta-4.jpg">
                    <li class = "menu-item level-2"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Boys','subcategory'=> $sub_category_boy->name_of_subcategory]) }}">{{$sub_category_boy->name_of_subcategory}}</a></li>
                    </ul>
                    </div>
                     @endforeach
                    </div>
            </div>
         </div>


