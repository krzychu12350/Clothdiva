'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Product filter
        --------------------*/
        $('.filter__controls li').on('click', function () {
            $('.filter__controls li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.property__gallery').length > 0) {
            var containerEl = document.querySelector('.property__gallery');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Search Switch
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay, .offcanvas__close").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    /*------------------
		Navigation
	--------------------
    $(".header__menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });*/

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    /*--------------------------
        Banner Slider
    ----------------------------
    $(".banner__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });*/

    /*--------------------------
        Product Details Slider
    ----------------------------*/
    $(".product__details__pic__slider").owlCarousel({
        loop: false,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<i class='arrow_carrot-left'></i>","<i class='arrow_carrot-right'></i>"],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false,
        mouseDrag: false,
        startPosition: 'URLHash'
    }).on('changed.owl.carousel', function(event) {
        var indexNum = event.item.index + 1;
        product_thumbs(indexNum);
    });

    function product_thumbs (num) {
        var thumbs = document.querySelectorAll('.product__thumb a');
        thumbs.forEach(function (e) {
            e.classList.remove("active");
            if(e.hash.split("-")[1] == num) {
                e.classList.add("active");
            }
        })
    }


    /*------------------
		Magnific
    --------------------*/
    $('.image-popup').magnificPopup({
        type: 'image'
    });


    $(".nice-scroll").niceScroll({
        cursorborder:"",
        cursorcolor:"#dddddd",
        boxzoom:false,
        cursorwidth: 5,
        background: 'rgba(0, 0, 0, 0.2)',
        cursorborderradius:50,
        horizrailenabled: false
    });

    /*------------------
        CountDown
    --------------------*/
    // For demo preview start
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    if(mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    var timerdate = mm + '/' + dd + '/' + yyyy;
    // For demo preview end


    // Uncomment below and use your date //

    /* var timerdate = "2020/12/30" */

	$("#countdown-time").countdown(timerdate, function(event) {
        $(this).html(event.strftime("<div class='countdown__item'><span>%D</span> <p>Day</p> </div>" + "<div class='countdown__item'><span>%H</span> <p>Hour</p> </div>" + "<div class='countdown__item'><span>%M</span> <p>Min</p> </div>" + "<div class='countdown__item'><span>%S</span> <p>Sec</p> </div>"));
    });

    /*-------------------
		Range Slider
	--------------------- */
	var rangeSlider = $(".price-range"),
    minamount = $("#minamount"),
    maxamount = $("#maxamount"),
    minPrice = rangeSlider.data('min'),
    maxPrice = rangeSlider.data('max');
    rangeSlider.slider({
    range: true,
    min: minPrice,
    max: maxPrice,
    values: [minPrice, maxPrice],
    slide: function (event, ui) {
        minamount.val(ui.values[0]);
        maxamount.val(ui.values[1]);
        }
    });
    minamount.val(rangeSlider.slider("values", 0));
    maxamount.val(rangeSlider.slider("values", 1));

    /*------------------
		Single Product
	--------------------*/
	$('.product__thumb .pt').on('click', function(){
		var imgurl = $(this).data('imgbigurl');
		var bigImg = $('.product__big__img').attr('src');
		if(imgurl != bigImg) {
			$('.product__big__img').attr({src: imgurl});
		}
    });
    
    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 1;
			}
		}
		$button.parent().find('input').val(newVal);
    });
    
    /*-------------------
		Radio Btn
	--------------------- */
    $(".size__btn label").on('click', function () {
        $(".size__btn label").removeClass('active');
        $(this).addClass('active');
    });
     /*-------------------
		Toogle Login/Register
	--------------------- */
        
    $(".account-icons").hover(function(e) {
        $(".toogle-div").css('zIndex', '2');
        $(".toogle-div").show();
      });
        
         
      $(".toogle-div").on({
        mouseenter: function () {
            $(this).show()
           
        },
        mouseleave: function () {
           $(this).hide()
        }
    });

    /* Women products*/
    $(".Women").on({
        mouseenter: function () {
            $(".women_products").css('zIndex', '2');
            $(".women_products").show();
            $(".men_products").hide();
            
        }
       
      });
        
   $(".women_products").on({
        mouseenter: function () {
            $(this).show()
           
        },
        mouseleave: function () {
           $(this).hide()
        }
    });

    /* Men products*/
    $(".Men").on({
        mouseenter: function () {
            $(".men_products").css('zIndex', '2');
            $(".men_products").show();
            $(".women_products").hide();
            $(".girls_products").hide();
            $(".boys_products").hide();
            
        }
       
      });
        
   $(".men_products").on({
        mouseenter: function () {
            $(this).show()
           
        },
        mouseleave: function () {
           $(this).hide()
        }
    });
     /* Girls products*/
     $(".Girls").on({
        mouseenter: function () {
            $(".girls_products").css('zIndex', '2');
            $(".girls_products").show();
            $(".women_products").hide();
            $(".men_products").hide();
            $(".boys_products").hide();
            
        }
       
      });
        
   $(".girls_products").on({
        mouseenter: function () {
            $(this).show()
           
        },
        mouseleave: function () {
           $(this).hide()
        }
    });

    /* Girls products*/
    $(".Boys").on({
        mouseenter: function () {
            $(".boys_products").css('zIndex', '2');
            $(".boys_products").show();
            $(".women_products").hide();
            $(".men_products").hide();
            $(".girls_products").hide();
            
        }
       
      });
        
   $(".boys_products").on({
        mouseenter: function () {
            $(this).show()
           
        },
        mouseleave: function () {
           $(this).hide()
        }
    });
    
    $(".restlink").hover(function(e) {
            $(".women_products").hide();
            $(".men_products").hide();
            $(".girls_products").hide();
            $(".boys_products").hide();
    });


    
    $(".header__right__widget").on({
        mouseenter: function () {
            $(".women_products").hide();
            $(".men_products").hide();
            $(".girls_products").hide();
            $(".boys_products").hide();
            
        }
       
      });

//MOBILE WOMEN SUBCATEGORIES
    $('.women_li').click(function() {
        $('.women_div').toggle();
    });

//MOBILE MEN SUBCATEGORIES
    $('.men_li').click(function() {
        $('.men_div').toggle();
    });

//MOBILE GIRLS SUBCATEGORIES
    $('.girls_li').click(function() {
      $('.girls_div').toggle();
    });

//MOBILE BOYS SUBCATEGORIES
$('.boys_li').click(function() {
    $('.boys_div').toggle();
  });

$('.carousel-item:nth-child(1)').addClass('active');
$('.carousel-indicators:nth-child(1)').addClass('active');



$( ".edit-user-data").on( "click", function() {
    $(".user-name").replaceWith($('<input class="mt-2 mb-2" name="user-name" value="' + $(".user-name").text() + '"></input>'));
    $(".user-surname").replaceWith($('<input class="mt-2 mb-2" name="user-surname" value="' + $(".user-surname").text() + '"></input>'));
    $(".user-mobile").replaceWith($('<input class="mt-2 mb-2" name="user-mobile" value="' + $(".user-mobile").text() + '"></input>'));
    $(".user-email").replaceWith($('<input class="mt-2 mb-2" name="user-email" value="' + $(".user-email").text() + '"></input>'));
    $(".user-data").css("padding-bottom", "20px");
    $(".user-data").append('<button class="btn btn-primary button_class" type="submit">Change</button></form>');

  });

  $( ".add-user-address-data").on( "click", function() {
      /*
    $(".add-user-address-data").append($('<h6 class="mt-4">Street<h6><input class="mt-2 mb-2" name="name-of-street" placeholder="Street"></input>'));
    $(".add-user-address-data").append($('<h6>Apartment number<h6><input class="mt-2 mb-2" name="apartment-number" placeholder="Apartment number"></input>'));
    $(".add-user-address-data").append($('<h6>House number<h6><input class="mt-2 mb-2" name="house-number" placeholder="House number"></input>'));
    $(".add-user-address-data").append($('<h6>Post_code<h6><input class="mt-2 mb-2" name="post-code" placeholder="Post code"></input>'));
    $(".add-user-address-data").append($('<h6>City<h6><input class="mt-2 mb-2" name="name-of-city" placeholder="City"></input>'));
    $(".add-user-address-data").append($('<h6>State<h6><input class="mt-2 mb-2" name="name-of-state" placeholder="State"></input>'));*/
    
    $("#add-desc").replaceWith('<h5 class="mt-4">YOUR ADDRESS DETAILS</h5>'
    +'<h6 class="mt-4">Street<h6><input class="mt-2 mb-2" name="name-of-street" placeholder="Street"></input>'
    +'<h6>Apartment number<h6><input class="mt-2 mb-2" name="apartment-number" placeholder="Apartment number"></input>'
    +'<h6>House number<h6><input class="mt-2 mb-2" name="house-number" placeholder="House number"></input>'
    +'<h6>Post_code<h6><input class="mt-2 mb-2" name="post-code" placeholder="Post code"></input>'
    +'<h6>City<h6><input class="mt-2 mb-2" name="name-of-city" placeholder="City"></input>'
    +'<h6>State<h6><input class="mt-2 mb-2" name="name-of-state" placeholder="State"></input>'
    +'<br /><button class="btn btn-primary button_class" type="submit">Add</button>');
    $("#add-icon").replaceWith('');
    $(".user-address-data").css("padding-bottom", "20px");
 
});


$( ".edit-user-address-data").on( "click", function() {
  
    $(".name-of-street").replaceWith($('<input class="mt-2 mb-2" name="name-of-street" form="update-address-data" value="' + $(".name-of-street").text() + '"></input>'));
    $(".apartment-number").replaceWith($('<input class="mt-2 mb-2" name="apartment-number" form="update-address-data" value="' + $(".apartment-number").text() + '"></input>'));
    $(".house-number").replaceWith($('<input class="mt-2 mb-2" name="house-number" form="update-address-data" value="' + $(".house-number").text() + '"></input>'));
    $(".post-code").replaceWith($('<input class="mt-2 mb-2" name="post-code" form="update-address-data" value="' + $(".post-code").text() + '"></input>'));
    $(".name-of-city").replaceWith($('<input class="mt-2 mb-2" name="name-of-city" form="update-address-data" value="' + $(".name-of-city").text() + '"></input>'));
    $(".name-of-state").replaceWith($('<input class="mt-2 mb-2" name="name-of-state" form="update-address-data" value="' + $(".name-of-state").text() + '"></input>'));
    $(".user-address-data").css("padding-bottom", "20px");
    $(".user-address-data").append('<button class="btn btn-primary button_class" form="update-address-data" type="submit">Change</button>');
});



$("#address-data").change(function() {
    if(this.checked) {
        $("#fname").val($('#fname').attr('placeholder'));
        $("#lname").val($('#lname').attr('placeholder'));
        $("#phone").val($('#phone').attr('placeholder'));
        $("#email").val($('#email').attr('placeholder'));
        $("#state").val($('#state').attr('placeholder'));
        $("#street").val($('#street').attr('placeholder'));
        $("#apartment_number").val($('#apartment_number').attr('placeholder'));
        $("#house_number").val($('#house_number').attr('placeholder'));
        $("#postcode").val($('#postcode').attr('placeholder'));
        $("#city").val($('#city').attr('placeholder'));
        $("#country").val($('#country').attr('placeholder'));
    }
    else{
        $(".checkout__form .checkout__form__input input").val("");
    }
});



$('#pagination-here').bootpag({
    total: 10,          
    page: 1,            
    maxVisible: 5,     
    leaps: true,
    href: "#result-page-{{number}}",
})

//page click action
$('#pagination-here').on("page", function(event, num){
    //show / hide content or pull via ajax etc
    $("#content").html("Page " + num); 
});
  

})(jQuery);

