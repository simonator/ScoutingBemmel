$('document').ready(function(){

	var menuActive = false;
	$('.menu-button').click(function(){
		if (menuActive) {
			$('.menu').addClass('nav-vertical');
			$('.menu').addClass('hidden-xs nav-horizontal');
			$('.dropdown').css({left: ''});
			menuActive = false;
		} else {
			$('.menu').removeClass('hidden-xs nav-horizontal');
			$('.menu').addClass('nav-vertical');
			$('.dropdown').css({left: '0px'});
			menuActive = true
			$('main').one('click', function(){
				$('.menu').addClass('nav-vertical');
				$('.menu').addClass('hidden-xs nav-horizontal');
				$('.dropdown').css({left: ''});
				menuActive = false;
			});
		}
	});

	$('.dropdown-trigger').hover(function(){
		$('.dropdown').css('display', 'block');
	}, function(){
		$('.dropdown').css('display', '');
	});

	$('body').scroll(function() {
		
	});

	function moveParallax() {

		//Here we calculate the current scroll position
		var scrolled = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;

		windowHeight = $( window ).height();
		documentHeight = $( document ).height();

		//Calculates the currently scrolled list item
		var currentItem = Math.ceil(scrolled  / windowHeight);

		//Calculates the offset to the next item
		var offsetToNextItem = scrolled - (Math.ceil(windowHeight * currentItem));

		//Calculated where the .itemImage container should be (position) for the current list item
		var parallaxCurrent = Math.round((offsetToNextItem / parallaxSpeed) + (windowHeight / parallaxSpeed));

		//Calculated where the .itemImage container should be (position) for the next(!) list item
		var parallaxNext = Math.round(offsetToNextItem / parallaxSpeed);

		//iterate through all items with class .listItem; index starts at 0, as it is position in array
		$('.listItem').each(function(index, element) {

			//For convenience usage
			nthChild = index+1;

			if (currentItem == nthChild) {
				$( '.listItem:nth-child(' + nthChild + ') .itemImage' ).css( 'top', parallaxCurrent );
			} else {
				$( '.listItem:nth-child(' + nthChild + ') .itemImage' ).css( 'top', parallaxNext );
			}
		});

	}

});
