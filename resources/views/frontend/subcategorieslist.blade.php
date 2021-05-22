
<div class = "subcategories women_products position-absolute bg-white col-xl-12" style = "display:none">    
        <!--<h4 style = "text-align:center"> <br></br> KOBIETY <br></br> </h4>-->

            @foreach($sub_categories_women as $sub_category_woman)
            <ul class = "submenu-submenu" style = "text-align:center">
                <li class = "menu-item level-2" style = "display: block;">{{$sub_category_woman->name_of_subcategory}}</li>
            </ul>
            @endforeach

          

            <h4 style = "text-align:center"> <br></br> WOMEN <br></br> </h4>
                            <h4 style = "text-align:center"> <br></br> CLOTHES <br></br> </h4>
                        <ul class = "submenu-submenu" style = "text-align:center">
                            <li class = "menu-item level-2" style = "display: block;"> <a style = "color:black" href = "">Dresses, jumpsuits</a></li>
                            <li class = "menu-item level-2" style = "display: block;"> <a style = "color:black" href = "">Jackets, coats</a></li>
                            <li class = "menu-item level-2" style = "display: block;"> <a style = "color:black" href = "">Shirts, blouses</a></li>
                            <li class = "menu-item level-2" style = "display: block;"> <a style = "color:black" href = "">T-shirts</a></li>
                            <li class = "menu-item level-2" style = "display: block;"> <a style = "color:black" href = "">Sweatshirts, sweaters</a></li>
                            <li class = "menu-item level-2" style = "display: block;"> <a style = "color:black" href = "">Sweatshirts, sweaters</a></li>
                            <li class = "menu-item level-2" style = "display: block;"> <a style = "color:black" href = "">Trousers, jeans</a></li>
                            <li class = "menu-item level-2" style = "display: block;"> <a style = "color:black" href = "">Jackets, coats</a></li>
                            <br></br>
                        </ul>    
                        
                            <h4 style = "text-align:center"> <br></br> SHOES <br></br> </h4>
                        <ul class = "submenu-submenu" style = "text-align:center">
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">All</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Heels</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Flats</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Leather</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Sandals</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Sliders, mules</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Espadrilles</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Sneakers</a></li>
                            <br></br>
                            <br></br>
                        </ul>
         </div>

         <div class = "subcategories men_products position-absolute bg-white col-xl-12" style = "display:none">
            
            @foreach($sub_categories_men as $sub_category_man)
            <ul class = "submenu-submenu" style = "text-align:center">
                <li class = "menu-item level-2" style = "display: block;">{{$sub_category_man->name_of_subcategory}}</li>
            </ul>
            @endforeach
         
         <h4 style = "text-align:center"> <br></br> MEN <br></br> </h4>
                            <h4 style = "text-align:center"> <br></br> CLOTHES <br></br> </h4>
                        <ul class = "submenu-submenu" style = "text-align:center">
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Coats, jackets</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Hoodies, sweatshirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Shirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">T-shirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Polo shirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Jumpers, Cardigans</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Trousers, jeans</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Sutis</a></li>
                            <br></br>
                            </ul>
                            </li>
                            
                            <h4 style = "text-align:center"> <br></br> ACCESSORIES <br></br> </h4>
                        <ul class = "submenu-submenu" style = "text-align:center">
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Shoes</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Bags</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Hats</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Socks</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Toiletry bags</a></li>
                            <br></br>
                            <br></br>
                            <br></br>
                        </ul>
            
         </div>

         <div class = "girls_products position-absolute bg-white col-xl-12" style = "display:none">

         @foreach($sub_categories_girls as $sub_category_girl)
            <ul class = "submenu-submenu" style = "text-align:center">
                <li class = "menu-item level-2" style = "display: block;">{{$sub_category_girl->name_of_subcategory}}</li>
            </ul>
            @endforeach

         
         <h4 style = "text-align:center"> <br></br> GIRLS <br></br> </h4>
                            <h4 style = "text-align:center"> <br></br> GIRL 4-13 YEARS <br></br> </h4>
                        <ul class = "submenu-submenu" style = "text-align:center">
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Coats, jackets</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Dresses</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Sweatshirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">T-shirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Sweaters</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Skirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Trousers, jeans</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Shirts, blouses</a></li>
                            <br></br>
                            </ul>
                            </li>
                            
                            <h4 style = "text-align:center"> <br></br> GIRL 0-4 YEARS <br></br> </h4>
                        <ul class = "submenu-submenu" style = "text-align:center">
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Coats, jackets</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Dresses, skirt</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Sweatshirts, sweaters</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Trousers, jeans</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">T-Shirts</a></li>
                            <br></br>
                            <br></br>
                            <br></br>
                        </ul>
         </div>

         <div class = "boys_products position-absolute bg-white col-xl-12" style = "display:none">
            @foreach($sub_categories_boys as $sub_category_boy)
                <ul class = "submenu-submenu" style = "text-align:center">
                    <li class = "menu-item level-2" style = "display: block;">{{$sub_category_boy->name_of_subcategory}}</li>
                </ul>
                @endforeach

         <h4 style = "text-align:center"> <br></br> BOYS <br></br> </h4>
                            <h4 style = "text-align:center"> <br></br> BOY 4-13 YEARS <br></br> </h4>
                        <ul class = "submenu-submenu" style = "text-align:center">
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Coats, jackets</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Sweatshirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">T-shirts</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Trousers, jeans</a></li>
                            <li class = "menu-item level-1" style = "display: block;"> <a style = "color:black" href = "">Shirts, blouses</a></li>
                            <br></br>
                            </ul>
                            </li>
                            
                            <h4 style = "text-align:center"> <br></br> BOY 0-4 YEARS <br></br> </h4>
                        <ul class = "submenu-submenu" style = "text-align:center">
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Coats, jackets</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Sweatshirts, sweaters</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">Trousers, jeans</a></li>
                            <li class = "menu-item level-1" style = "display: block;"><a style = "color:black" href = "">T-Shirts</a></li>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                        </ul>
         </div>
