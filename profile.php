<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="utf-8">
  <title>JSam Hotel Room Finder - Profile</title>
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
               <a href="index.html"><img src="img/logoJSam_small.png" alt="JSam Hotel Room Finder" title="JSam Hotel Room Finder"></a> 
            </div>

            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="index.php"><i class="ion-ios-home"></i> &nbsp; Home</a></li>
                <li class=""><a href="roomResultsG.php"><i class="ion-ios-home"></i> &nbsp; Room Results</a></li>
                <li class=""><a href="#features"><i class="ion-ios-home"></i> &nbsp; Profile</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header -->

        <!--==========================
          Intro Section
        ============================-->

        <section id="introProf">
          <div class="contentJSamPr2 flexible2 center">
              <h2>Σαμαρά Δ. Ιωάννα</h2>
              <p>Visual Designer</p>
          </div>    

        </section><!-- #intro -->



        <main id="main">

          <section id="about" class="section-bg">
            <div class="container-fluid">
              <div class="section-header">
                <h3 class="section-title">Bookings</h3>
                <span class="section-divider"></span>
                <p class="section-description">
                  Designed by Joan Samaras for the Web Development Academy.
                </p>
              </div>

                <div class="row flexible" style="padding: 25px;">

                    <table class="table hotels" id="bookings">
                      <tbody>
                        
                      </tbody>
                    </table>

              </div>
 
            </div>
          </section><!-- #about -->

          
          <section style="padding: 0px 0px 25px 0px;">
              <div class="row" style="padding: 25px;">
                  <div class="flex-half">
                      <div class="section-header">
                          <h3 class="section-title" style="padding-top: 30px;">Favorites</h3>
                          <span class="section-divider"></span>
                      </div>
                      <div class="container-fluid">
                          <table id="favourites" class="table">
                            <tbody>
                            </tbody>
                          </table>
                      </div>
                      
                  </div>
                  
                  
                  <div class="flex-half">
                      <div class="section-header">
                          <h3 class="section-title" style="padding-top: 30px;">Reviews</h3>
                          <span class="section-divider"></span>
                      </div>
                      <div class="container-fluid">
                          <table id="reviews" class="table">
                            <tbody>
                            </tbody>
                          </table>
                      </div>
                      
                  </div>
                  
                  
              </div>
          </section>


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

        <!--Datatables Plugin-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

        <!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

        <script>
            $.getJSON("php/user_reviews.php", function(data){
                if ('results' in data){
                        $('#reviews').DataTable( {
                            data: data['results'],
                            columns: [
                                { title: "Rating", data: "rate", render:
                                    function(data, type, row, meta) {
                                            var rate=parseInt(data);
                                            var stars = '<center>';
                                            for(var i=1;i<=rate;i++){
                                                stars+='<i class="fas fa-star"></i>';
                                            }
                                            stars+='</center>';
                                            return stars;
                                    }

                                },
                                { title: "Review", data: "text"}
                            ]
                        } );
                } else {
                    $('#reviews').html('<tr><td><div class="flexible4">No reviews yet</div></td></tr>');
                }
            });
            
            $.getJSON("php/favorites.php", function(data){
                if ('results' in data){
                        $('#favourites').DataTable( {
                            data: data['results'],
                            columns: [
                                { title: "Hotel Name", data: "name" },
                                { title: "Hotel Area", data: "area" },
                                { title: "Hotel Page", data: "room_id",render:
                                    function(data, type, row, meta) {
                                        return '<a href="hotelPage.php?id='+data+'">Go to Hotel Page >></a>';
                                    }
                                }
                            ]
                        } );
                } else {
                    $('#reviews').html('<tr><td><div class="flexible4">No favorites yet</div></td></tr>');
                }
            });
            
            //render the bookings
            $.getJSON("php/bookings.php", function(data){
                if ('results' in data){                      
                    $.each(data["results"], function(i, value){
                        $("#bookings").append(`<tr><td><div class="flex-half"><div class="about-img-hot fadeInLeft">
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
                    $('#bookings').html(`<tr>
                                        <td><div class="flexible4">No bookings made yet.</div></td></tr>`);
                }
            });
        </script>
    </body>
</html>
