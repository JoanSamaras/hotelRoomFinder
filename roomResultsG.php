<?php
session_start();
?>
<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="utf-8">
  <title>JSam Hotel Room Results</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Date-Picker Plugin -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" crossorigin="anonymous">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!--JQuery Slider Plugin-->
  <link href="css/nouislider.css" rel="stylesheet" type="text/css"/>
  
  <!--JQuery Slider Plugin-->
  <link href="css/nouislider.css" rel="stylesheet" type="text/css"/>
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--  jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
  <!--Datatables Plugin-->
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">  
  
</head>

<body>
    
        <!--==========================
          Header
        ============================-->
        <header id="header">
          <div class="container">

            <div id="logo" class="pull-left">
               <a href="index.php"><img src="img/logoJSam_small.png" alt="JSam Hotel Room Finder" title="JSam Hotel Room Finder"></a> 
            </div>

            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="index.php"><i class="ion-ios-home"></i> &nbsp; Home</a></li>
                <li class=""><a href="#features"><i class="ion-ios-home"></i> &nbsp; Room Results</a></li>
                <li class=""><a href="profile.php"><i class="ion-ios-home"></i> &nbsp; Profile</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header -->

        <!--==========================
          Features Section
        ============================-->
        <section id="features">
            <div class="container" >

                <div class="row">

                <div class="col-lg-8 offset-lg-4">
                  <div class="section-header wow fadeIn" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeIn;">
                    <h3 class="section-title">Αναζήτηση Καταλύματος</h3>
                    <span class="section-divider"></span>
                  </div>
                </div>

                <div class="col-lg-4 col-md-5 features-img">
                  <img src="img/product-features.png" alt="" class="wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                </div>

                <div class="col-lg-8 col-md-7 ">
                 <form id="msform">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 box wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                      <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                      <h4 class="title">Στοιχεία Δωματίου:</h4>
                      <select class="form-control required" name="city" id="cities">
                      </select>
                      <select class="form-control required" name="room" id="rooms">
                          
                      </select>
                      <select class="form-control required" name="guests" id="guests">
                          
                      </select>
                    </div>
                      
                    <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                      <div class="icon"><i class="ion-ios-shuffle"></i></div>
                      <h4 class="title">Slider &euro; Range:</h4>
                      <div class="dropdown description flexible">
                            <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal"></div>
                            <br/>
                            <div class="flexible3">
                                <br/>   
                                <div class="flexible4 flex-half">
                                    <p class="col-sm-4 control-label flexible2">FROM </p>
                                    <input class="form-control input-sm col-sm-5" type="number" step="1" id="priceMin">
                                    <p class="col-sm-1 control-label">&euro;&nbsp;&nbsp;</p>
                                </div>
                                <div class="flexible4 flex-half">
                                    <p class="col-sm-4 control-label flexible2">&nbsp;&nbsp;TO</p>
                                    <input type="number" step="1" class="form-control input-sm col-sm-5" id="priceMax">
                                    <p class="col-sm-1 control-label">&euro;</p>
                                </div>
                            </div>
                      </div>
                    </div>
                      
                    <div class="col-lg-6 col-md-6 box wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                      <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                      <h4 class="title">Ημ/νία Άφιξης:</h4>
                      <div class="form-group flexible2 description">
                          <input class="form-control" id="date3" name="start" placeholder="<?=$_SESSION['dateArr']?>" type="text"/>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                      <div class="icon"><i class="ion-ios-calendar-outline"></i></div>
                      <h4 class="title">Ημ/νία Αποχώρησης:</h4>
                      <div class="form-group flexible2 description">
                          <input class="form-control" id="date4" name="end" placeholder="<?=$_SESSION['dateDepar']?>" type="text"/>
                      </div>
                    </div>
                      <input class="btn btn-info btn-lg flexible" 
                             type="submit" 
                             name="submit2" 
                             style="margin-bottom: 50px;" 
                             value="Ενημέρωσε τα αποτελέσματα αναζήτησης!"/>
                  </div>
                 </form>
                </div>

              </div>

          </div>
        </section>



        <main id="main">

          <!--==========================
            About Us Section
          ============================-->
          <section id="about" class="section-bg">
            <div class="container-fluid">
              <div class="section-header">
                <h3 class="section-title">Αποτελέσματα Αναζήτησης</h3>
                <span class="section-divider"></span>
                <p class="section-description">
                  Designed by Joan Samaras for the Web Development Academy.
                </p>
              </div>

                <div id="tableCont" class="row flexible" style="padding: 25px;">
                  
                  <table class="table hotels" id="results">
                      <thead>
                        <tr>
                          <th scope="row">Hotel Search Results</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          
                        </tr>
                      </tbody>
                      
                    </table>

              </div>

            </div>
          </section><!-- #about -->

          

          
        </main>

        <!--==========================
          Footer
        ============================-->
        <footer id="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-lg-left text-center">
                <div class="copyright">
                    &copy; Copyright:&nbsp; <strong>Joan Samaras</strong> - 2018 {Web Development Academy}. &nbsp;&nbsp; All Rights Reserved
                </div>
              </div>
            </div>
          </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/magnific-popup/magnific-popup.min.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
        <!--<script src="js/imagesloaded.pkgd.min.js" type="text/javascript"></script>-->
        <script src="js/anime.min.js" type="text/javascript"></script>


        <!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

        <!--Datatables Plugin-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        
        <!--JQuery Slider Plugin-->
        <script src="js/nouislider.js" type="text/javascript"></script>
        
        <!-- AJAX calls -->
        <script>

            function scrollToMain(){
                $('html, body').animate({
                    scrollTop: $("#main").offset().top - 140
                }, 1000);
            }

            if(window.location.hash) {
                var hash = window.location.hash.substring(1);
                if (hash == 'st') scrollToMain();
            }

            $.getJSON("php/cities.php", function(data){
                $.each(data["results"], function(i, value){
                  $("#cities").append('<option value=' + value['city'] + ' '+value['selected']+'>' + value['city'] + '</option>');
                });
            });

            $.getJSON("php/roomTypes.php", function(data){
                $.each(data["results"], function(i, value){
                  $("#rooms").append('<option value=' + value['room_type'] + ' '+value['selected']+'>' + value['room_type'] + '</option>');
                });
            });

            $.getJSON("php/guests.php", function(data){
                $.each(data["results"], function(i, value){
                    $("#guests").append('<option value=' + value['count_of_guests'] + ' '+value['selected']+'>' + value['count_of_guests'] + '</option>');
                });
            });

            function refreshResults(){
                $('#results').empty();
                $('#sug').empty();
                $.getJSON("php/searchRooms.php", function(data){
                    if ('suggestions' in data){
                        $('#results').html(`<tr>
                                            <td><div class="flexible4">No matching Results, but...</div></td></tr>`);
                        $("#tableCont").append(`<table class="table" id="sug"><thead><tr>
                                        <th scope="row">Hotel Suggestions</th></tr></thead><tbody>
                                        </tbody></table>`);                      
                        $.each(data["suggestions"], function(i, value){
                            $("#sug").append(`<tr><td><div class="flex-half"><div class="about-img-hot fadeInLeft">
                                            <img src="img/rooms/${value['photo']}" alt=""></div>
                                            </div><div class="hotelNameLoc" style="max-width: 100% !important; width: auto !important;">
                                            <h2 style="padding-left: 10px;">${value['name']}</h2>
                                            <h3 class="loc" style="padding-left: 10px;"><i class="fas fa-map-signs fa-2x"></i>&nbsp;${value['location']}, ${value['area']} <i>(${value['city']})</i></h3>
                                            </div><div class="content fadeInRight flex-half">
                                            <p style="padding: 35px 25px 35px 25px;">${value['short_description']}</p>
                                            <a href="hotelPage.php?id=${value['room_id']}" class="btn btn-info btn-lg" style="margin: 0px 15px 20px 0px; float: right; align-self: flex-end;"> Hotel Page<span style="font-weight: bold;"> &nbsp; >></span></a>
                                            </div><div class="flexible5"><div style="align-self: center; margin-right: 5px;">
                                            </div><div class="btn-lg" style="margin-right: 10px; flex-grow: 3; max-width: 21rem; align-self: center;"><span style="font-weight: bold;">Price: &nbsp;</span> ${value['price']} &euro;&nbsp; / night </div>
                                            <div class="card border-info mb-3" style="max-width: 18rem; margin-right: 10px;"><div class="card-header">Room Type:</div><div class="card-body text-info"><h5 class="card-title">${value['room_type_text']}</h5>
                                            </div></div><div class="card border-info mb-3" style="max-width: 18rem;"><div class="card-header">Capacity:</div><div class="card-body text-info"><h5 class="card-title">${value['count_of_guests']}</h5>
                                            </div></div></div></td></tr>`);
                        });
                    } else if ('results' in data){
                        $.each(data["results"], function(i, value){
                            $("#results").append(`<tr>
                                        <td><div class="flex-half"><div class="about-img-hot fadeInLeft">
                                        <img src="img/rooms/${value['photo']}" alt=""></div>
                                        </div><div class="hotelNameLoc" style="max-width: 100% !important; width: auto !important;">
                                        <h2 style="padding-left: 10px;">${value['name']}</h2>
                                        <h3 class="loc" style="padding-left: 10px;"><i class="fas fa-map-signs fa-2x"></i>&nbsp;${value['location']}, ${value['area']} <i>(${value['city']})</i></h3>
                                        </div><div class="content fadeInRight flex-half">
                                        <p style="padding: 35px 25px 35px 25px;">${value['short_description']}</p>
                                        <a href="hotelPage.php?id=${value['room_id']}" class="btn btn-info btn-lg" style="margin: 0px 15px 20px 0px; float: right; align-self: flex-end;"> Hotel Page<span style="font-weight: bold;"> &nbsp; >></span></a>
                                        </div><div class="flexible5"><div style="align-self: center; margin-right: 5px;">
                                        </div><div class="btn-lg" style="margin-right: 10px; flex-grow: 3; max-width: 21rem; align-self: center;"><span style="font-weight: bold;">Price: &nbsp;</span> ${value['price']} &euro;&nbsp; / night </div>
                                        <div class="card border-info mb-3" style="max-width: 18rem; margin-right: 10px;"><div class="card-header">Room Type:</div><div class="card-body text-info"><h5 class="card-title">${value['room_type_text']}</h5>
                                        </div></div><div class="card border-info mb-3" style="max-width: 18rem;"><div class="card-header">Capacity:</div><div class="card-body text-info"><h5 class="card-title">${value['count_of_guests']}</h5>
                                        </div></div></div></td></tr>`);
                        });
                    } else {
                        $('#results').html(`<tr>
                                            <td><div class="flexible4">No matching Results</div></td></tr>`);
                    }
                });
            } //end function


        $("#msform").submit(function(e){
                e.preventDefault();
                var room_type = $("#rooms").val();
                var guests = $("#guests").val();
                var city = $("#cities").val();
                var dateArr = $("#date3").val();
                var dateDepar = $("#date4").val();
                var pMin = $('#priceMin').val();
                var pMax = $('#priceMax').val();
                $.post( "php/setFilter.php", { city: city, roomType: room_type, dateArr: dateArr, dateDepar: dateDepar, priceMin:pMin, priceMax:pMax, guests:guests})
                    .done(function() {
                        refreshResults();
                        scrollToMain();
                    });
            });

        refreshResults();

        </script>
    </body>
</html>
