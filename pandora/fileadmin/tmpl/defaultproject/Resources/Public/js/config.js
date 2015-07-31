$(document).ready(function() {

	// Selectboxit
	
	//$('.selectboxit').selectBoxIt();
	
	// BX Slider

	if ($('.stageslider').length) {

		var stageslider = $('.stageslider').bxSlider({
			auto : true,
			autoControls : false,
			speed : 1000,
			pause : 7000,
			pager : true,
			controls : true,
			minSlides : 1,
			maxSlides : 1,
			moveSlides : 1,
			//slideWidth : refslideWidth,

		});
	}
	
	
	
	// Linking whole Slider
	
	$(".slide_image").click(function() {
		var teaserLink = $(this).find('a');
		window.location.href = teaserLink.attr('href');
		return false;
	});

	// Linking whole Teaser

	$(".linkit").hover(function() {
		if($(this).find('a').length){ $(this).addClass('linked'); } //to style cursor: pointer to linked teasers
	});
	
	$(".linkit").click(function() {
		var teaserLink = $(this).find('a');
		window.location.href = teaserLink.attr('href');
		return false;
	});
	
	// Gallery BX Slider
$(window).load(function() {
	if ($('.galleryslider').length) {

		var stageslider = $('.galleryslider').bxSlider({
			auto : false,
			autoControls : false,
			startSlide: 0,
			speed : 1000,
			pause : 7000,
			pager : true,
			controls : true,
			minSlides : 1,
			maxSlides : 1,
			moveSlides : 1,
			//slideWidth : refslideWidth,

		});
	}
});

	// Flyout Meta Nav

	$('#menu_meta ul.nav1 li').hover(function() {
		$(this).children("ul").stop().slideDown();
	}, function() {
		$(this).children("ul").stop().slideUp(300);
	});

	// Flyout Resorts

	$('#menu_main ul li.nav1').hover(function() {
		$(this).children("ul").stop().slideDown();
	}, function() {
		$(this).children("ul").stop().slideUp(300);
	});

	//
	
// Menu Mobile

	$("#menu_mobile").click(function(event) {
		if ($(this).hasClass("active") && $(window).scrollTop() == 0) {
			$(this).removeClass("active");
			$("#menu_mobile_content").hide();
		} else {
			$('html, body').animate({
				scrollTop : 0
			}, 500);
			$(this).addClass("active");
			$("#menu_mobile_content").slideDown();
		}
		return false;
	});

	$("#menu_mobile_content a").click(function(event) {
		if($(this).parent().hasClass('sub')){
			if ($(this).parent().hasClass("open")) {
				$(this).parent().removeClass("open");
				$(this).parent().children('ul').slideUp();
			} else {
				$(this).parent().addClass("open");
				$(this).parent().children('ul').slideDown();
			}		
			return false;
		}
		return true;
	});
	
// script to toggle class on scroll	
	$(window).scroll(function() {
    if ($(this).scrollTop() > 55){  
        $('.header_top').addClass("sticky");
        $('.navigation').addClass("navigation_sticky");
        $('.header_logo').addClass("logo_sticky");
        $('body').css('background','#fff');
        $('#menu_mobile').css('bottom','4px');
        $('#menu_mobile').css('top','8px');
    }
    else{
    	$('body').css('background','#475054');
    	$('#menu_mobile').css('bottom','14px');
    	$('#menu_mobile').css('top','0px');
        $('.header_top').removeClass("sticky");
        $('.navigation').removeClass("navigation_sticky");
        $('.header_logo').removeClass("logo_sticky");
    }
});


$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('main').addClass("main_sticky");
    }
    else{
        $('main').removeClass("main_sticky");
    }
});	
// box1 hover 
	
	$( ".round1" ).hover(
  function() {
    $(".box1").show();
    $(".box2, .box3").hide();
  }, function() {
  });
 
  // box2 hover 
	
	$( ".round2" ).hover(
  function() {
    $(".box2").show();
    $(".box1, .box3").hide();
  }, function() {
  });
  
  // box2 hover 
	
	$( ".round3" ).hover(
  function() {
    $(".box3").show();
    $(".box2, .box1").hide();
  }, function() {
  });
  
// Flyout Sitemap

	$(".box_sitemap_button").click(function() {
		if ($(this).hasClass('dropped')) {
			$(this).removeClass("dropped");
			$(".box_sitemap_content").slideUp();
		} else {
			$(this).addClass("dropped");
			$(".box_sitemap_content").slideDown();
		}

	});

	// Flyout Substage Menu

	$('#menu_substage ul li.nav1').hover(function() {
			if($(this).children('ul').length){
				$( "#menu_substage" ).css('padding-bottom', 0);
				var ChildHeight = $(this).children("ul").height()+10;
				$(this).children("ul").stop().slideDown(300);
  				$( "#menu_substage" ).stop().animate({
    				paddingBottom: ChildHeight
  				}, 300, function() { });
  			}
  	
	}, function() {
		$(this).children("ul").slideUp(0);
  		$( "#menu_substage" ).animate({
    		paddingBottom: 0
  		}, 0, function() {
    
  		});
	});

	// Flyout Booker

	$(".book_button").click(function() {
		if ($(this).hasClass('dropped')) {
			$(this).removeClass("dropped");
			$(".book_box").removeClass("dropped");
			$(".book_flyout").slideUp();
		} else {
			$(this).addClass("dropped");
			$(".book_box").addClass("dropped");
			$(".book_flyout").slideDown();
		}

	});
	
	// Substage Menu add to header
	function SubstagePos() {
		if($("#menu_substage").length){
	    	var scroll = $(window).scrollTop();
	    	var StageHeight = $('#stage').height();
    		if (scroll >= StageHeight) {
        		$("#menu_substage").addClass("fixed");
        		$(".book_box, .socials").addClass("secondpos");
       	 	$("main").addClass("fixed_substage");
    		}else{
       		 	$("#menu_substage").removeClass("fixed");
       		 	$("main").removeClass("fixed_substage");
       		 	$(".book_box, .socials").removeClass("secondpos");
    		}
    	}
	}
	
	$(SubstagePos);
	$(window).scroll(function() {    
		$(SubstagePos);
	});	
	
	
});



// Pinterest laden

(function(d){
    var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
    p.type = 'text/javascript';
    p.async = true;
    p.src = '//assets.pinterest.com/js/pinit.js';
    f.parentNode.insertBefore(p, f);
}(document));