jQuery(document).ready(function($) {
    
  // Header fixed and Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
      $('#header').addClass('header-fixed');
    } else {
      $('.back-to-top').fadeOut('slow');
      $('#header').removeClass('header-fixed');
    }
  });
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

// Mobile Navigation
	if ($('#nav-menu-container').length) {
	var $mobile_nav = $('#nav-menu-container').clone().prop({
	  id: 'mobile-nav'
	});
	$($mobile_nav).prepend('<div class="flexible4">\n\
								<a href="index.html">\n\
									<img src="img/logoJSam2_small.png" alt="JSam Hotel Room Finder" title="JSam Hotel Room Finder">\n\
								</a>\n\
							</div><hr class="mob-logo-hr"/>');
	$mobile_nav.find('> ul').attr({
	  'class': '',
	  'id': ''
	});
	$('body').append($mobile_nav);
	$('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fas fa-bars fa-2x"></i></button>');
	$('body').append('<div id="mobile-body-overly"></div>');
	$('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');
	//    $('#header').hide();

	$(document).on('click', '.menu-has-children i', function(e) {
	  $(this).next().toggleClass('menu-item-active');
	  $(this).nextAll('ul').eq(0).slideToggle();
	  $(this).toggleClass("fa-chevron-up fa-chevron-down");
	});

	$(document).on('click', '#mobile-nav-toggle', function(e) {
	  $('body').toggleClass('mobile-nav-active');
	  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
	  $('#mobile-body-overly').toggle();
	});

	$(document).click(function(e) {
	  var container = $("#mobile-nav, #mobile-nav-toggle");
	  if (!container.is(e.target) && container.has(e.target).length === 0) {
		if ($('body').hasClass('mobile-nav-active')) {
		  $('body').removeClass('mobile-nav-active');
		  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
		  $('#mobile-body-overly').fadeOut();
		}
	  }
	});
	} else if ($("#mobile-nav, #mobile-nav-toggle").length) {
	$("#mobile-nav, #mobile-nav-toggle").hide();
	}


  // Smooth scroll on page hash links
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });

	// Gallery - uses the magnific popup jQuery plugin
	$('.gallery-popup').magnificPopup({
	type: 'image',
	removalDelay: 300,
	mainClass: 'mfp-fade',
	gallery: {
	  enabled: true
	},
	zoom: {
	  enabled: true,
	  duration: 300,
	  easing: 'ease-in-out',
	  opener: function(openerElement) {
		return openerElement.is('img') ? openerElement : openerElement.find('img');
	  }
	}
	});

	// custom code

	$('#intro').addClass('animated pulse');


	// index.php  stepForm

	//jQuery time
	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches

	$(".next").click(function(){
		if(animating) return false;
		animating = true;

		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
			'transform': 'scale('+scale+')',
			'position': 'absolute'
		  });
				next_fs.css({'left': left, 'opacity': opacity});
			},
			duration: 800,
			complete: function(){
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".previous").click(function(){
		if(animating) return false;
		animating = true;

		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'left': left});
				previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			},
			duration: 800,
			complete: function(){
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".submit").click(function(){
		return false;
	});


	// Datepicker

	var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
	var options={
		format: 'dd/mm/yyyy',
		container: container,
		todayHighlight: true,
		startDate: new Date(),
		autoclose: true
	}
	$('#date').datepicker(options);
	$('#date2').datepicker(options);
        $('#date3').datepicker(options);
        $('#date4').datepicker(options);
	$('#date').datepicker('setDate', new Date);
	$('#date2').datepicker('setDate', new Date);
        
        
        


	// slider
	// -----------------------
	var pMin = document.getElementById('priceMin');
    var pMax = document.getElementById('priceMax');

	// initializing the slider
	var html5Slider = document.getElementById('price-slider');

	noUiSlider.create(html5Slider, {
		start: [ 0, 600 ],
		connect: true,
		range: {
			'min': 0,
			'max': 600
		}
	});

	// updating the <select> and <input>
	html5Slider.noUiSlider.on('update', function( values, handle ) {

		var value = values[handle];

		if ( handle ) {
			pMax.value = Math.round(value);
		} else {
			pMin.value = Math.round(value);
		}
	});

	pMin.addEventListener('change', function(){
		html5Slider.noUiSlider.set([this.value, null]);
	});

	pMax.addEventListener('change', function(){
		html5Slider.noUiSlider.set([null, this.value]);
	});
// ---------------------------


});

