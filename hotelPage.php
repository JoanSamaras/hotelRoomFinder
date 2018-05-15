<!DOCTYPE html>

<html lang="el">
<head>
  <meta charset="utf-8">
  <title>JSam Hotel Room Finder</title>
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
  
  <!-- Star Rating -->
  <link href="css/SimpleStarRating.css" rel="stylesheet" type="text/css"/>

    <!--Datatables Plugin-->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVHwfS2XiZhmTn40Y3U2O2lVxvBAJw9_k&sensor=false"></script>

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
                <li class=""><a href="roomResultsG.php"><i class="ion-ios-home"></i> &nbsp; Room Results</a></li>
                <li class=""><a href="profile.php"><i class="ion-ios-home"></i> &nbsp; Profile</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header -->
        
        
        <section id="introHotelPage">
            <div id="mainPic" style="width: 100%; background-size: cover; overflow: hidden;">
                
            </div>
        </section><!-- #introHotel -->

        <main id="main">

          <!--==========================
            About Us Section
          ============================-->
          <section id="about" class="section-bg">
            <div class="container-fluid">
              <div class="section-header">
                  <h3 class="section-title" id="title1"></h3>
                  <span class="section-divider"></span>
              </div>

              <div class="flexible">

                <div class="flexible2">
                    <h3 style="padding-left: 25px; margin-top: 40px;" class="center" id="title2"></h3>
                    <hr/>
                    <p style="padding-top: 15px;" id="longDesc"></p>
                    <hr/>
                        <div class="flexible4" style="padding-top: 35px;">
                            <div style="align-self: center; margin-right: 5px;">
                                <button id="favButton" class="btn btn-warning btn-lg" style="margin-right: 10px; flex-grow: 3; max-width: 18rem; align-self: center;">
                                  
                                </button>
                                <button id="book" type="button" class="btn btn-outline-info btn-lg">Book it <b>NOW</b> !!</button>
                            </div>
                            <div class="btn-lg" style="margin-right: 10px; flex-grow: 3; max-width: 21rem; align-self: center; text-align: center;">
                                <span style="font-weight: bold;">Price: &nbsp;</span>
                                <div id="price"></div>
                                
                            </div>
                            <div class="row" style="padding-top: 15px; justify-content: center;">
                                <div class="card border-info mb-3" style="max-width: 18rem; margin-right: 10px;">
                                    <div class="card-header">Room Type:</div>
                                    <div class="card-body text-info">
                                        <h5 class="card-title" id="room_type"> </h5>
                                    </div>
                                </div>  
                                <div class="card border-info mb-3" style="max-width: 18rem; margin-right: 10px;">
                                    <div class="card-header">Capacity:</div>
                                    <div class="card-body text-info">
                                        <h5 class="card-title" id="capacity"></h5>
                                    </div>
                                </div>
                                <div class="card border-info mb-3" style="max-width: 18rem; margin-right: 10px;">
                                    <div class="card-header">Parking:</div>
                                    <div class="card-body text-info">
                                        <h5 class="card-title" id="parking">
                                        </h5>
                                    </div>
                                </div>  
                                <div class="card border-info mb-3" style="max-width: 18rem; margin-right: 10px;">
                                    <div class="card-header">Wifi:</div>
                                    <div class="card-body text-info">
                                      <h5 class="card-title" id="wifi">
                                      </h5>
                                    </div>
                                </div>
                                <div class="card border-info mb-3" style="max-width: 18rem; margin-right: 10px;">
                                    <div class="card-header">Pet-Friendly:</div>
                                    <div class="card-body text-info">
                                        <h5 class="card-title" id="pets">
                                        </h5>
                                    </div>
                                </div>
                                
                            </div> <!-- .row -->
                        </div><!-- .flexible5 -->
                    
                    
                  </div><!-- .flexible2 -->
                  
                </div>
              </div>

            </div>
          </section><!-- #about -->
          
          
          <section id="mapHotel">
              <div style="width: 100%; height: 250px;" id="map">
                  
              </div>
        </section><!-- #mapHotel -->
        
        
        <section id="clients">
            <div class="container-fluid">
                <div class="section-header">
                    <h3 class="section-title">Reviews from our Customers</h3>
                    <span class="section-divider"></span>
                </div>
                
                <div class="row flexible" style="padding: 25px;">
                    <table class="table" id="custReviews" style="width: 100%;">
                    </table>
                </div>
                
                <form id="reviewForm">
                    <div class="alert alert-info" role="alert" style="padding-bottom: 60px;">
                        <h4 class="alert-heading">Add your Review for our Hotel room:</h4>
                        <hr>
                        
                        <div class="flexible4">
                          
                          <div class="form-group" style="width: 100%;">
                                <label for="exampleFormControlInput1"><i>Stars</i></label>
                                <span class="rating" data-default-rating="1" data-stars="5"></span>
                          </div>
                          <div class="form-group" style="width: 100%;">
                                <label for="exampleFormControlTextarea1"><i>Example textarea</i></label>
                                <textarea class="form-control" id="review_text" rows="3"></textarea>
                          </div>
                        </div>
                        
                        <hr>
                        <input type="submit" class="btn btn-info btn-lg" style="float: right;" value="Add your Review" />
                            
                    </div>
                </form>
                
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
            <!--  jQuery -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/magnific-popup/magnific-popup.min.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
        

        <!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        
        <!-- Star Rating -->
        <script src="js/SimpleStarRating.js" type="text/javascript"></script>

        <!--Datatables Plugin-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        
        
        
        <script>
            // Star Rating
            var rate = 0;
            var ratings = document.getElementsByClassName('rating');
            for (var i = 0; i < ratings.length; i++) {
                var r = new SimpleStarRating(ratings[i]);

                ratings[i].addEventListener('rate', function(e) {
                    console.log('Rating: ' + e.detail);
                    rate = e.detail;
                });
            }

            //render reviews
            function refreshReviews(data){
                if ('reviews' in data){
                    $('#custReviews').DataTable( {
                        data: data['reviews'],
                        columns: [
                            { title: "User", data: "username" },
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
                }
            } 

            var searchParams = new URLSearchParams(window.location.search);
            if(searchParams.has('id')){

                var room_id = searchParams.get('id');

                $.getJSON("php/hotelDetail.php?id="+room_id, function(data){

                    //populate hotel details in page
                    var details = data["details"];
                    $('#mainPic').html('<img src="img/rooms/'+details['photo']+'" alt="'+details['name']+'" style="align-items: center; width: 100%;"/>');
                    $('#title1').html(details['name']);
                    $('#title2').html(details['location']+", &nbsp;"+details['area']+":&nbsp;&nbsp;&nbsp;"+details['city']);
                    $('#longDesc').html(details['long_description']);
                    $('#room_type').html(details['room_type_text']);
                    $('#price').html(details['price']+"&euro;&nbsp; / night");
                    $('#capacity').html(details['count_of_guests']);
                    $('#parking').html( (details['parking']==1)? '<i class="fas fa-check-square" style="font-size: 28px; color: #55fabe; padding: 5px;"></i>':'<i class="fas fa-times-circle" style="font-size: 28px; color: #bd2130; padding: 5px;"></i>');
                    $('#wifi').html( (details['wifi']==1)? '<i class="fas fa-check-square" style="font-size: 28px; color: #55fabe; padding: 5px;"></i>':'<i class="fas fa-times-circle" style="font-size: 28px; color: #bd2130; padding: 5px;"></i>');
                    $('#pets').html( (details['pet_friendly']==1)? '<i class="fas fa-check-square" style="font-size: 28px; color: #55fabe; padding: 5px;"></i>':'<i class="fas fa-times-circle" style="font-size: 28px; color: #bd2130; padding: 5px;"></i>');
                    var pos=new google.maps.LatLng(details['lat_location'],details['lng_location']); 
                    var mapOptions = { center: pos, zoom: 10 }; 
                    var marker = new google.maps.Marker({ position: pos, title: details['name']}); 
                    var map = new google.maps.Map(document.getElementById("map"), mapOptions); 
                    marker.setMap(map);
                    
                    $('#favButton').click( function(){
                        $.post( "php/toggleFavorite.php", { room_id: room_id})
                            .done(function(ret) {
                                if (parseInt(ret)==1){
                                    $('#favButton').html('<span class="input-group-addon" style="margin-right: 7px;"><i class="fas fa-minus-square" style="font-size: 22px; color: #fff;"></i></span>Remove from <span style="color: #fff; font-weight: bold;">favorites</span>');
                                }else{
                                    $('#favButton').html('<span class="input-group-addon" style="margin-right: 7px;"><i class="fas fa-heart" style="font-size: 22px; color: #fff;"></i></span>Add to <span style="color: #fff; font-weight: bold;">favorites</span>');
                                }
                            });
                    });

                    $('#book').click( function(){
                        $.post( "php/addBooking.php", { room_id: room_id})
                            .done(function(ret) {
                                if(ret==1){
                                    $('#book').hide();
                                    alert('Thanks for booking !');
                                }else{
                                    alert('Error booking the room ! Have you selected the dates of your stay ?');
                                }

                            });
                    });
            
                    if (details['is_favorite']==1){
                        $('#favButton').html('<span class="input-group-addon" style="margin-right: 7px;"><i class="fas fa-minus-square" style="font-size: 22px; color: #fff;"></i></span>Remove from <span style="color: #fff; font-weight: bold;">favorites</span>');
                    }else{
                        $('#favButton').html('<span class="input-group-addon" style="margin-right: 7px;"><i class="fas fa-heart" style="font-size: 22px; color: #fff;"></i></span>Add to <span style="color: #fff; font-weight: bold;">favorites</span>');
                    }

                    if(details['is_avaialble']!=1){
                        $('#book').hide();
                    }
                    
                    //display hotel reviews
                    refreshReviews(data)
                });
                
                
                

                $("#reviewForm").submit(function(e){
                    e.preventDefault();
                    var review_text = $('#review_text').val();
                    $.post( "php/addReview.php", { text: review_text, room_id: room_id, rate: rate})
                        .done(function() {
                            $.getJSON("php/hotelDetail.php?id="+room_id, function(data){
                                alert('Thanks for your review');
                                refreshReviews(data)
                            });

                        });

                });


            }


            
            
        </script>
        
    </body>
</html>
