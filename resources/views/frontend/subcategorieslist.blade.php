
<div class = "subcategories women_products position-absolute bg-white col-xl-12" style = "display:none">    
        <!--<h4 style = "text-align:center"> <br></br> KOBIETY <br></br> </h4>-->
            @foreach($sub_categories_women as $sub_category_woman)
            
            <?php
            //echo $sub_category_woman->name_of_subcategory;
            //,['subcategory'=> $sub_category_woman->name_of_subcategory]
            ?>
            <ul class = "submenu-submenu" style = "text-align:center">
               <li class = "menu-item level-2" style = "display: block;"><a href="{{ route('showProducts',['type'=> 'Women','subcategory'=> $sub_category_woman->name_of_subcategory]) }}">{{$sub_category_woman->name_of_subcategory}}</a></li>
            </ul>
            @endforeach

         </div>

         <div class = "subcategories men_products position-absolute bg-white col-xl-12" style = "display:none">
            
            @foreach($sub_categories_men as $sub_category_man)
            <ul class = "submenu-submenu" style = "text-align:center">
                <li class = "menu-item level-2" style = "display: block;"><a href="{{ route('showProducts',['type'=> 'Men','subcategory'=> $sub_category_man->name_of_subcategory]) }}">{{$sub_category_man->name_of_subcategory}}</a></li>
            </ul>
            @endforeach
     
            
         </div>

         <div class = "girls_products position-absolute bg-white col-xl-12" style = "display:none">

         @foreach($sub_categories_girls as $sub_category_girl)
            <ul class = "submenu-submenu" style = "text-align:center">
                <li class = "menu-item level-2" style = "display: block;"><a href="{{ route('showProducts',['type'=> 'Girls','subcategory'=> $sub_category_girl->name_of_subcategory]) }}">{{$sub_category_girl->name_of_subcategory}}</a></li>
            </ul>
            @endforeach

         
         </div>

         <div class = "boys_products position-absolute bg-white col-xl-12" style = "display:none">
            @foreach($sub_categories_boys as $sub_category_boy)
                <ul class = "submenu-submenu" style = "text-align:center">
                    <li class = "menu-item level-2" style = "display: block;"><a href="{{ route('showProducts',['type'=> 'Boys','subcategory'=> $sub_category_boy->name_of_subcategory]) }}">{{$sub_category_boy->name_of_subcategory}}</a></li>
                </ul>
                @endforeach

            </div>
