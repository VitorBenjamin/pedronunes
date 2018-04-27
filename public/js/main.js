$(document).ready(function(){
	$("[rel='tooltip']").tooltip();    

	$('.thumbnail').hover(
		function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        });    
	$(window).scroll(function(){                          
		if ($(this).scrollTop() > 200) {
			$('#menu').fadeIn(500);
		} else {
			$('#menu').fadeOut(500);
		}
	});
	$(window).scroll(function(){                          
		if ($(this).scrollTop() < 200) {
			$('.menu').fadeIn(500);
		} else {
			$('.menu').fadeOut(500);
		}
	});

	// init Masonry

	var $grid = $('.grid').masonry({
		itemSelector: 'none', 
		columnWidth: '.grid-sizer',
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
	if ($('.link-tab').hasClass("active")) {
		$grid.infiniteScroll({
			path: getPenPath,
			append: '.grid-item',
			outlayer: msnry,
			status: '.page-load-status',
			history: false,
		});
	}
	$(".link-tab").on("click", function() {
		$grid.infiniteScroll({
			path: getPenPath,
			append: '.grid-item',
			outlayer: msnry,
			status: '.page-load-status',
			history: false,
		});
	});
});