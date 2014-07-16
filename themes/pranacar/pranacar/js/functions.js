(function($){

	"use strict";

	$(function(){
		toggleProductos();
	});

	function toggleProductos() {
		$('.categoria').on('click', function(){
			if($(this).find('ul').css('display') == 'block')
				$(this).find('ul').slideUp('fast');
			else
				$(this).find('ul').slideDown('slow');
		});
	}

})(jQuery);