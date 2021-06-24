//alert(data1);
//alert(data2);
//alert(arrayFromPHP1);
//const myJSON = JSON.stringify(data1);



(function ($) {
  // USE STRICT
  "use strict";

  try {
    //WidgetChart 1
    var ctx = document.getElementById("widgetChart1");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          type: 'line',
          datasets: [{
            data: [78, 81, 80, 45, 34, 12, 40],
            label: 'Dataset',
            backgroundColor: 'rgba(255,255,255,.1)',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0
            }
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              borderWidth: 0
            },
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }

    //WidgetChart 2
    var ctx = document.getElementById("widgetChart2");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'],
          type: 'line',
          datasets: [{
            data: [1, 18, 9, 17, 34, 22],
            label: 'Dataset',
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {

          maintainAspectRatio: false,
          legend: {
            display: false
          },
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Montserrat',
            bodyFontFamily: 'Montserrat',
            cornerRadius: 3,
            intersect: false,
          },
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              tension: 0.00001,
              borderWidth: 1
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }

    //WidgetChart 3
    var ctx = document.getElementById("widgetChart3");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'],
          type: 'line',
          datasets: [{
            data: [65, 59, 84, 84, 51, 55],
            label: 'Dataset',
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {

          maintainAspectRatio: false,
          legend: {
            display: false
          },
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Montserrat',
            bodyFontFamily: 'Montserrat',
            cornerRadius: 3,
            intersect: false,
          },
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              borderWidth: 1
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }

    //WidgetChart 4
    var ctx = document.getElementById("widgetChart4");
    if (ctx) {
      ctx.height = 115;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          labels: months4,
          datasets: [
            {
              label: "My First dataset",
              //data: [78, 81, 80, 65, 58, 75, 60, 75, 65, 60, 60, 75],
              data: totals4,
              borderColor: "transparent",
              borderWidth: "0",
              backgroundColor: "rgba(255,255,255,.3)"
            }
          ]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          scales: {
            xAxes: [{
              display: false,
              categoryPercentage: 1,
              barPercentage: 0.65
            }],
            yAxes: [{
              display: false
            }]
          }
        }
      });
    }

    // Percent Chart
    var ctx = document.getElementById("percent-chart");
    if (ctx) {
      ctx.height = 280;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [
            {
              label: "My First dataset",
              data: [60, 40],
              backgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              hoverBackgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              borderWidth: [
                0, 0
              ],
              hoverBorderColor: [
                'transparent',
                'transparent'
              ]
            }
          ],
          labels: [
            'Products',
            'Services'
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 55,
          animation: {
            animateScale: true,
            animateRotate: true
          },
          legend: {
            display: false
          },
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16
          }
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

  try {

    // Percent Chart 2
    var ctx = document.getElementById("percent-chart2");
    if (ctx) {
      ctx.height = 209;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [
            {
              label: "My First dataset",
              data: [60, 40],
              backgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              hoverBackgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              borderWidth: [
                0, 0
              ],
              hoverBorderColor: [
                'transparent',
                'transparent'
              ]
            }
          ],
          labels: [
            'Products',
            'Services'
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 87,
          animation: {
            animateScale: true,
            animateRotate: true
          },
          legend: {
            display: false,
            position: 'bottom',
            labels: {
              fontSize: 14,
              fontFamily: "Poppins,sans-serif"
            }

          },
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16,
          }
        }
      });
    }

  } catch (error) {
    console.log(error);
  }
})(jQuery);


(function ($) {
  // Use Strict
  "use strict";
  try {
    var progressbarSimple = $('.js-progressbar-simple');
    progressbarSimple.each(function () {
      var that = $(this);
      var executed = false;
      $(window).on('load', function () {

        that.waypoint(function () {
          if (!executed) {
            executed = true;
            /*progress bar*/
            that.progressbar({
              update: function (current_percentage, $this) {
                $this.find('.js-value').html(current_percentage + '%');
              }
            });
          }
        }, {
            offset: 'bottom-in-view'
          });

      });
    });
  } catch (err) {
    console.log(err);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Scroll Bar
  try {
    var jscr1 = $('.js-scrollbar1');
    if(jscr1[0]) {
      const ps1 = new PerfectScrollbar('.js-scrollbar1');      
    }

    var jscr2 = $('.js-scrollbar2');
    if (jscr2[0]) {
      const ps2 = new PerfectScrollbar('.js-scrollbar2');

    }

  } catch (error) {
    console.log(error);
  }

})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Select 2
  try {

    $(".js-select2").each(function () {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    });

  } catch (error) {
    console.log(error);
  }


})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Dropdown 
  try {
    var menu = $('.js-item-menu');
    var sub_menu_is_showed = -1;

    for (var i = 0; i < menu.length; i++) {
      $(menu[i]).on('click', function (e) {
        e.preventDefault();
        $('.js-right-sidebar').removeClass("show-sidebar");        
        if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
          $(this).toggleClass('show-dropdown');
          sub_menu_is_showed = -1;
        }
        else {
          for (var i = 0; i < menu.length; i++) {
            $(menu[i]).removeClass("show-dropdown");
          }
          $(this).toggleClass('show-dropdown');
          sub_menu_is_showed = jQuery.inArray(this, menu);
        }
      });
    }
    $(".js-item-menu, .js-dropdown").click(function (event) {
      event.stopPropagation();
    });

    $("body,html").on("click", function () {
      for (var i = 0; i < menu.length; i++) {
        menu[i].classList.remove("show-dropdown");
      }
      sub_menu_is_showed = -1;
    });

  } catch (error) {
    console.log(error);
  }

  var wW = $(window).width();

 

  // Sublist Sidebar
  try {
    var arrow = $('.js-arrow');
    arrow.each(function () {
      var that = $(this);
      that.on('click', function (e) {
        e.preventDefault();
        that.find(".arrow").toggleClass("up");
        that.toggleClass("open");
        that.parent().find('.js-sub-list').slideToggle("250");
      });
    });

  } catch (error) {
    console.log(error);
  }

  try {
    // Hamburger Menu
    $('.hamburger').on('click', function () {
      $(this).toggleClass('is-active');
      $('.navbar-mobile').slideToggle('500');
    });
    $('.navbar-mobile__list li.has-dropdown > a').on('click', function () {
      var dropdown = $(this).siblings('ul.navbar-mobile__dropdown');
      $(this).toggleClass('active');
      $(dropdown).slideToggle('500');
      return false;
    });
  } catch (error) {
    console.log(error);
  }
})(jQuery);

try {
$( ".add-promotion" ).on( "click", function() {
  //alert("Obsługuje przycisk!");
    $("#promotion-table").find('tbody')
    .prepend($('<tr>')
      .attr('class', 'tr-shadow')
        .prepend($(
          '<td> <input form="addp" type="text" name="promotion-name"></input></td> <td><input type="text" form="addp"  name="size-of-promotion"></input></td> <td><input type="text" form="addp" name="description"></input></td>  <td><input type="text" form="addp" name="start-of-promotion"></input></td> <td><input type="text" form="addp" name="end-of-promotion"></input></td> <td><input type="text" form="addp" name="id-product"></input></td>  <td><input type="text" form="addp" name="category-product"></input></td>   <td><input type="text" form="addp" name="subcategory-product"></input></td>   </form>  <td> <div class="table-data-feature"><button type="submit" form="addp" class="item"><i class="zmdi zmdi-collection-add"></i></div></td>')
        )
    );
});
} catch (error) {
  console.log(error);
}

$(".edit-promotion").on( "click", function() {
  //alert("Działa edycja!");
  var selRow = String($(this).closest('tr').attr('id'));
  alert(selRow);
  var textOfTd = $("#id-p").text();
  alert(textOfTd);
  $('#promotion-table #' + selRow).find('td').empty();
  $('#promotion-table').find('tr#' + selRow)
  .replaceWith($( '<td>  <input form="editp" type="hidden" value=' + textOfTd + ' name="id-promotion"><input form="editp" type="text" name="promotion-name"></input></td> <td><input type="text" form="editp"  name="size-of-promotion"></input></td> <td><input type="text" form="editp" name="description"></input></td>  <td><input type="text" form="editp" name="start-of-promotion"></input></td> <td><input type="text" form="editp" name="end-of-promotion"></input></td> <td><input type="text" form="editp" name="id-products"></input></td>  <td><input type="text" form="editp" name="category-product"></input></td>   <td><input type="text" form="editp" name="subcategory-product"></input></td>    </form>  <td> <div class="table-data-feature"><button type="submit" form="editp" class="item"><i class="zmdi zmdi-check"></i></div></td>'));
});


/*
//USERS ADDING AND EDITING
$( ".add-user" ).on( "click", function() {
    $("#users-table").find('tbody')
    .prepend($('<tr>')
        .prepend($(
          '<td> <input form="addu" type="text" name="user-name" placeholder="Name..."></input></td> <td><input type="text" form="addu"  name="user-surname" placeholder="Surname..."></input></td> <td><input type="text" form="addu" name="user-mobile" placeholder="Mobile..."></input></td>  <td><input type="text" form="addu" name="user-email" placeholder="E-mail..."></input></td>'
          +'<td>'
          +'<select class="js-select2" form="addu"  id="user-role" name="user-role">'
          +'<option value="1">Admin</option>'
          +'<option value="2">User</option>'
          +'</select>'
          +'</td>'
          +'<td> <div class="table-data-feature"><button type="submit" form="addu" class="item"><i class="zmdi zmdi-collection-add"></i></div></td>')
        )
    );
});*/


$( ".edit-user").on( "click", function() {
  var selRow = String($(this).closest('tr').attr('id'));
 // alert(selRow);
  var currentRow=$(this).closest("tr"); 
  var id_ushop=currentRow.find("td:eq(0)").text();

  var pre = currentRow.find("td:eq(1)").text();
  var pre1 = currentRow.find("td:eq(2)").text();
  var pre2 = currentRow.find("td:eq(3)").text();
  var pre3 = currentRow.find("td:eq(4)").text();
  var pre4 = currentRow.find("td:eq(5)").text();
  //var textOfTd = $("#id-u").find("id_ushop").text();
  //var textOfTd = $("#id-u").text();
  //alert("id usera" + id_ushop);
  $('#users-table #' + selRow).find('td').empty();
  $('#users-table').find('tr#' + selRow)
  .replaceWith($('<td> <input form="editu" type="hidden" value=' + id_ushop + ' name="id_user"> <input form="editu" type="text" name="user-name" value=' + pre + '></input></td> <td><input type="text" form="editu"  name="user-surname" value=' + pre1 + '></input></td> <td><input type="text" form="editu" name="user-mobile" value=' + pre2 + '></input></td>  <td><input type="text" form="editu" name="user-email" value=' + pre3 + '></input></td>'
  +'<td>'
  +'<select class="js-select2" form="editu"  id="user-role" name="user-role">'
  +'<option value="1">Admin</option>'
  +'<option value="2">User</option>'
  +'</select>'
  +'</td><td> <div class="table-data-feature"><button type="submit" form="editu" class="item"><i class="zmdi zmdi-check"></i></div></td>'));
  
});

//SUBCATEGORIES ADDING AND EDITING
$( ".add-subcategory" ).on( "click", function() {
  //alert("Obsługuje przycisk!");
    $("#subcategories-table").find('tbody')
    .prepend($('<tr>')
        .prepend($(
          '<td><input form="addsc" type="text" name="subcategory-name"></input></td>'
         +'<td>'
         +'<div class="rs-select2--trans rs-select2--sm">'
         +'<select class="js-select2" form="addsc"  id="category-name" name="category-name">'
         +'<option selected="selected" value=">1">Women</option>'
         +'<option value="2">Men</option>'
         +'<option value="3">Girls</option>'
         +'<option value="4">Boys</option>'
         +'</select>'
         +'<div class="dropDownSelect2"></div>'
         +'</div>'
         +'</td>'
         +'<td> <div class="table-data-feature"><button type="submit" form="addsc" class="item"><i class="zmdi zmdi-collection-add"></i></div></td>')
        )
    );
});


$( ".edit-subcategory").on( "click", function() {
  var selRow = String($(this).closest('tr').attr('id'));
  var currentRow=$(this).closest("tr"); 
  var id_subcat = currentRow.find("td:eq(0)").text();
  var pre = currentRow.find("td:eq(1)").text();

  $('#subcategories-table #' + selRow).find('td').empty();
  $('#subcategories-table').find('tr#' + selRow)
  .replaceWith($('<td> <input form="editsc" type="hidden" value=' + id_subcat + ' name="id-subcat"></input> <input form="editsc" type="text" value=' + pre + ' name="subcategory-name"></input></td>'
         +'<td>'
         +'<div class="rs-select2--trans rs-select2--sm">'
         +'<select class="js-select2" form="editsc"  id="category-name" name="category-name">'
         +'<option selected="selected" value=">1">Women</option>'
         +'<option value="2">Men</option>'
         +'<option value="3">Girls</option>'
         +'<option value="4">Boys</option>'
         +'</select>'
         +'<div class="dropDownSelect2"></div>'
         +'</div>'
         +'</td>'
          +'<td> <div class="table-data-feature"><button type="submit" form="editsc" class="item"><i class="zmdi zmdi-check"></i></div></td>'));
  
});

//PRODUCTS ADDING AND EDITING

$( ".add-product" ).on( "click", function() {
    $("#products-table").find('tbody')
    .prepend($('<tr>')
        .prepend($(
          '<td> <input form="addprod" type="text" name="product-name"></input></td> <td><input type="text" form="addprod"  name="product-image"></input></td> <td><input type="text" form="addprod"  name="product-prize"></input></td> <td><input type="text" form="addprod"  name="product-color"></input></td> <td><input type="text" form="addprod"  name="product-size"></input></td> <td><input type="text" form="addprod"  name="product-desc"></input></td>   <td><input type="text" form="addprod"  name="id_subcat"></input></td> </form>  <td> <div class="table-data-feature"><button type="submit" form="addprod" class="item"><i class="zmdi zmdi-collection-add"></i></div></td>')
        )
    );
});

$( ".edit-product").on( "click", function() {
  var selRow = String($(this).closest('tr').attr('id'));
  //alert(selRow);
  var textOfTd = $("#id-u").text();
  $('#products-table #' + selRow).find('td').empty();
  $('#products-table').find('tr#' + selRow)
  .replaceWith($('<td> <input form="editprod" type="text" name="product-name"></input></td> <td><input type="text" form="editprod"  name="product-image"></input></td> <td><input type="text" form="editprod"  name="product-prize"></input></td> <td><input type="text" form="editprod"  name="product-color"></input></td> <td><input type="text" form="editprod"  name="product-size"></input></td> <td><input type="text" form="editprod"  name="product-desc"></input></td> <td><input type="text" form="editprod"  name="id_subcat"></input></td>  <td> <div class="table-data-feature"><button type="submit" form="editprod" class="item"><i class="zmdi zmdi-check"></i></div></td>'));
  
});

//ORDERS ADDING AND EDITING
/*
$( ".edit-order").on( "click", function() {
  var selRow = String($(this).closest('tr').attr('id'));
  alert(selRow);
  var textOfTd = $("#id-o").text();
  $('#products-table #' + selRow).find('td').empty();
  $('#products-table').find('tr#' + selRow)
  .replaceWith($('<td> <input form="editprod" type="text" name="product-name"></input></td> <td><input type="text" form="editprod"  name="product-image"></input></td> <td><input type="text" form="editprod"  name="product-prize"></input></td> <td><input type="text" form="editprod"  name="product-color"></input></td> <td><input type="text" form="editprod"  name="product-size"></input></td> <td><input type="text" form="editprod"  name="product-desc"></input></td> </form>  <td> <div class="table-data-feature"><button type="submit" form="editprod" class="item"><i class="zmdi zmdi-check"></i></div></td>'));
  
});

$( ".order-update").on( "click", function() {
  alert($('#selectOption').find(":selected").text());
});*/


$( ".add-slide" ).on( "click", function() {
  $("#banner-table").find('tbody')
  .prepend($('<tr>')
      .prepend($(
        '<td> <input type="file" id="slide" name="slide" form="addslider"></input> </td> <td><textarea type="text" form="addslider"  name="paragraph-large"></textarea></td> <td><textarea type="text" form="addslider"  name="paragraph-small"></textarea></td> <td><textarea type="text" form="addslider"  name="link"></textarea></td> <td><textarea type="text" form="addslider"  name="link-description"></textarea></td> </form>  <td> <div class="table-data-feature"><button type="submit" form="addslider" class="item"><i class="zmdi zmdi-collection-add"></i></div></td>')
      )
  );
});

$( ".edit-slide" ).on( "click", function() {
  //var pre = $('#' + selRow +' .p-large').val();
 // var pre = $('#banner-table #' + selRow +' #p-large').text();
  var id = $("#id-s").text();
  var pre = $("#p-large").text();
  var pre1 = $("#p-small").text()
  var pre2 = $("#l-href").text();
  var pre3 = $("#l-desc").text();
  var selRow = String($(this).closest('tr').attr('id'));
  var textOfTd = $("#id-s").text();

  $('#banner-table #' + selRow).find('td').empty();
  $('#banner-table').find('tr#' + selRow)
  .replaceWith($(
        '<td> <input type="hidden" id="id-slide" name="id-slide" form="editslide" value="'+id+'"></input> <input type="file" id="slide" name="slide" form="editslide"></input> </td> <td><textarea type="text" form="editslide"  name="paragraph-large" placeholder="'+pre+'"></textarea></td> <td><textarea type="text" form="editslide"  name="paragraph-small" placeholder="'+pre1+'"></textarea></td> <td><textarea type="text" form="editslide"  name="link" placeholder="'+pre2+'"></textarea></td> <td><textarea type="text" form="editslide"  name="link-description" placeholder="'+pre3+'"></textarea></td> </form>  <td> <div class="table-data-feature"><button type="submit" form="editslide" class="item"><i class="zmdi zmdi-collection-add"></i></div></td>')
      );
  

});


