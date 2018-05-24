$(document).ready(function(){
	$("[rel='tooltip']").tooltip();    

	$('.card').hover(
		function(){
            $(this).find('.overlay').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.overlay').slideUp(250); //.fadeOut(205)
        });  
	$('.grid-item').hover(
		function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        });   
	$(window).scroll(function(){                          
		if ($(this).scrollTop() > 110) {
			$('#menu').fadeIn(500);
		} else {
			$('#menu').fadeOut(500);
		}
	});
	$(window).scroll(function(){                          
		if ($(this).scrollTop() < 110) {
			$('.menu').fadeIn(500);
		} else {
			$('.menu').fadeOut(500);
		}
	});
	$('a[href^="#"].nav-link').on('click', function(event) {
		var target = $(this.getAttribute('href'));
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
	var owl = $('.owl-carousel').owlCarousel({
		loop:true,
		nav:true,
		dots:false,
		margin:20,
		nav:true,
		navText:["<i class='material-icons icons-custom'>keyboard_arrow_left</i>","<i class='material-icons icons-custom'>keyboard_arrow_right</i>"],
		responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})
	$(".next").click(function(){
		console.log("asdadsa");
		owl.trigger('owl.next');
	})
	$(".prev").click(function(){
		owl.trigger('owl.prev');
	})
	// $(".remove-href").addClass('disabled').removeAttr("href"); 

	// init Masonry

	var $grid = $('.grid').masonry({
		itemSelector: 'none', 
		columnWidth: '.grid-item',
		percentPosition: true,
		transitionDuration: '0.8s',
		gutter: 10,
		stagger: 60,
		resize: false,
		visibleStyle: { transform: 'translateY(0)', opacity: 1 },
		hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
	});

	var msnry = $grid.data('masonry');

	$grid.imagesLoaded( function() {
		$grid.removeClass('are-images-unloaded');
		$grid.masonry( 'option', { itemSelector: '.grid-item' });
		var $items = $grid.find('.grid-item');
		$grid.masonry( 'appended', $items );
	});

	var nextPenSlugs = [
	'galeria-teste',
	'galeria-teste',
	'galeria-teste',
	];

	function getPenPath() {
		if ($('.link-tab').hasClass("active")) {
			var slug = nextPenSlugs[ this.loadCount ];
			if ( slug ) {
				return 'http://192.168.1.20/pedronunes/public/' + slug;
			}
		}
	}
	$grid.infiniteScroll({
		path: getPenPath,
		append: '.grid-item',
		outlayer: msnry,
		button: '.view-more-button',
		scrollThreshold: false,
		status: '.page-load-status',
		history: false,
	});
});

//Initialize Masonry inside Bootstrap 3 Tab component