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
  
  
</head>

<body>
    
        <!--==========================
          Header
        ============================-->
        <header id="header">
          <div class="container">

            <div id="logo" class="pull-left">
               <a href="#intro"><img src="img/logoJSam_small.png" alt="JSam Hotel Room Finder" title="JSam Hotel Room Finder"></a> 
            </div>

            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class=""><a href="#intro"><i class="ion-ios-home"></i> &nbsp; Home</a></li>
                <li class=""><a href="roomResultsG.php"><i class="ion-ios-home"></i> &nbsp; Room Results</a></li>
                <li class=""><a href="profile.php"><i class="ion-ios-home"></i> &nbsp; Profile</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header -->

        <!--==========================
          Intro Section
        ============================-->
        <section id="intro">
          <div class="contentJSamPr flexible3">
              <div class="slideshow flex-half">
                  <div id="slide-1" class="slide" style="background-image: url(img/imgJSam/01.png)"></div>
                  <div id="slide-2" class="slide" style="background-image: url(img/imgJSam/05.png)"></div>
                  <div id="slide-3" class="slide" style="background-image: url(img/imgJSam/06.png)"></div>
                  <div id="slide-4" class="slide" style="background-image: url(img/imgJSam/07.png)"></div>
                  <div id="slide-5" class="slide" style="background-image: url(img/imgJSam/08.png)"></div>
                  <div id="slide-6" class="slide" style="background-image: url(img/imgJSam/09.png)"></div>
                  <div class="pieces" style="background-image: url(img/imgJSam/01.png)"></div>
              </div>
              <div class="portfolioJSam flex-half">
                  <div class="intro-text">
                      <h2>Σαμαρά Δ. Ιωάννα</h2>
                      <p>Visual Designer</p>
                  </div>
                  <nav class="menu menu--jsam">
                      <a class="menu__item menu__item--current" href="#slide-1" data-image="img/imgJSam/01.png">
                              <span class="menu__item-name">Portfolio</span>
                              <span class="menu__item-label">Ρίξτε μια ματιά στην δουλειά μου...</span>
                      </a>
                      <a class="menu__item" href="#slide-2" data-image="img/imgJSam/05.png">
                              <span class="menu__item-name">Illustrations</span>
                              <span class="menu__item-label">Η δημιουργικότητα στην πράξη!</span>
                      </a>
                      <a class="menu__item" href="#slide-3" data-image="img/imgJSam/06.png">
                              <span class="menu__item-name">UI - UX Design</span>
                              <span class="menu__item-label">Web apps και Mobile apps σε μακέτες</span>
                      </a>
                      <a class="menu__item" href="#slide-4" data-image="img/imgJSam/07.png">
                              <span class="menu__item-name">Corporate Design</span>
                              <span class="menu__item-label">Έντυπο, διαφημίσεις, banners, logos, κλπ</span>
                      </a>
                      <a class="menu__item" href="#slide-5" data-image="img/imgJSam/08.png">
                              <span class="menu__item-name">Web Design</span>
                              <span class="menu__item-label">Full Stack Design και Front-end Design</span>
                      </a>
                      <a class="menu__item" href="#slide-6" data-image="img/imgJSam/09.png">
                              <span class="menu__item-name">Photography</span>
                              <span class="menu__item-label">Δουλειά σαν ερασιτέχνης Φωτογράφος!</span>
                      </a>
                  </nav>
              </div>

          </div>

        </section><!-- #intro -->

        <main id="main">

          <!--==========================
            About Us Section
          ============================-->
          <section id="about" class="section-bg">
            <div class="container-fluid">
              <div class="section-header">
                <h3 class="section-title">Η εφαρμογή μας</h3>
                <span class="section-divider"></span>
                <p class="section-description">
                  Designed by Joan Samaras for the Web Development Academy.
                </p>
              </div>

              <div class="row flexible">
                <div class="about-img fadeInLeft flex-half">
                    <img src="img/about-img.jpg" alt="">
                </div>

                <div class="content fadeInRight flexible2 flex-half">
                    <div class="triangle" style="max-width: 100% !important; width: auto !important;"></div>
                    <h2 style="padding-left: 10px;">Δοκίμασέ το...</h2>
                    <h2 style="text-align: right; padding-right: 10px;">...τώρα!</h2>
                    <h3 style="padding-left: 25px;">Μια εφαρμογή που σου επιτρέπει να βρεις το δωμάτιο που θες και να κάνεις κράτηση άμεσα!</h3>

                  <ul style="padding-left: 25px;">
                    <li><i class="ion-android-checkmark-circle"></i> Γρήγορο και Εύκολο με δυνατότητα άμεσης κράτησης.</li>
                    <li><i class="ion-android-checkmark-circle"></i> Οργανώνει τα ξενοδοχεία με βάση τα Αγαπημένα και τα Reviews.</li>
                    <li><i class="ion-android-checkmark-circle"></i> Τεσταρέ το παρακάτω σε 3 μόνο βήματα:</li>
                  </ul>

                  <div class="stepFormJSam">
                      <!-- MultiStep Form -->
                      <div class="row">
                          <div style="width: 100%;">
                              <form id="msform">
                                  <!-- progressbar -->
                                  <ul id="progressbar">
                                      <li class="active">Προορισμος</li>
                                      <li>Δωματιο</li>
                                      <li>Ημερομηνιες</li>
                                  </ul>
                                  <!-- fieldsets -->
                                  <fieldset>
                                      <h2 class="fs-title">ΕΠΙΛΟΓΗ ΠΡΟΟΡΙΣΜΟΥ</h2>
                                      <h3 class="fs-subtitle">Πού θα ήθελες να πας;</h3>
                                      <select class="form-control required" name="city" id="cities"> 
                                      </select>
                                      <input type="button" name="next" class="next action-button" value="Next"/>
                                  </fieldset>
                                  <fieldset>
                                      <h2 class="fs-title">ΕΠΙΛΟΓΗ ΔΩΜΑΤΙΟΥ</h2>
                                      <h3 class="fs-subtitle">Σε τι δωμάτιο θέλεις να μένεις;</h3>
                                      <select class="form-control required" name="room" id="rooms">
                                      </select>
                                      <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                      <input type="button" name="next" class="next action-button" value="Next"/>
                                  </fieldset>
                                  <fieldset>
                                      <h2 class="fs-title">ΗΜΕΡΟΜΗΝΙΕΣ ΤΑΞΙΔΙΟΥ</h2>
                                      <h3 class="fs-subtitle">Συμπλήρωσε ημερομηνίες άφιξης και αποχώρησης.</h3>
                                      <div class="form-group flexible2">
                                          <label class="control-label" for="date">Ημ/νία Άφιξης:</label>
                                          <div class="input-group flexible4">
                                              <input class="form-control input-group required" 
                                                     id="date" 
                                                     name="start" 
                                                     placeholder="DD/MM/YYY" 
                                                     type="text" 
                                                     value=""/>
                                                <span class="input-group-addon" style="align-self: center;">
                                                    <i class="fas fa-calendar-alt" style="font-size: 28px; color: #4aa5d3; padding-left: 15px;"></i>
                                                </span>
                                          </div>
                                      </div>
                                      <div class="form-group flexible2">
                                          <label class="control-label" for="date">Ημ/νία Αποχώρησης:</label>
                                          <div class="input-group flexible4">
                                                <input class="form-control input-group required" 
                                                       id="date2" 
                                                       name="end" 
                                                       placeholder="DD/MM/YYY" 
                                                       type="text" 
                                                       value=""/>
                                                <span class="input-group-addon" style="align-self: center;">
                                                    <i class="fas fa-calendar-alt" style="font-size: 28px; color: #4aa5d3; padding-left: 15px;"></i>
                                                </span>
                                          </div>
                                      </div>
                                      <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                      <input type="submit" name="submit" value="Submit" class="action-button" />
                                  </fieldset>
                              </form>

                          </div>
                      </div>
                      <!-- MultiStep Form -->
                  </div>
                </div>
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
        <!--  jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/magnific-popup/magnific-popup.min.js"></script>
        <script src="contactform/contactform.js"></script>
        <script src="js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="js/anime.min.js" type="text/javascript"></script>

        <!-- Template Main Javascript File -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/selfPromo.js" type="text/javascript"></script>
        
        <!-- AJAX calls -->
        <script>

            $.getJSON("php/cities.php", function(data){
                $.each(data["results"], function(i, value){
                  $("#cities").append('<option value=' + value['city'] + '>' + value['city'] + '</option>');
                });
            });

            $.getJSON("php/roomTypes.php", function(data){
                $.each(data["results"], function(i, value){
                  $("#rooms").append('<option value=' + value['id'] + '>' + value['room_type'] + '</option>');
                });
            });

            $("#msform").submit(function(e){
                e.preventDefault();
                var room_type = $("#rooms").val();
                var city = $("#cities").val();
                var dateArr = $("#date").val();
                var dateDepar = $("#date2").val();
                $.post( "php/setFilter.php", { city: city, roomType: room_type, dateArr: dateArr, dateDepar: dateDepar})
                    .done(function() {
                        window.location.href = 'roomResultsG.php#st'
                });

            });
        </script>
    </body>
</html>
