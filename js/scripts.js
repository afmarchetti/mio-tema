(function($) {

	$(".header__icon-bar").click(function(e){
		 $(".header__menu").toggleClass('show-menu');
		 e.preventDefault();
	});

})( jQuery );
