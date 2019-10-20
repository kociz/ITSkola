(function(){


	$('dd').addClass('hide');
	$('dl').on('mouseenter','dt',function(){
		$(this)
		     .next()
		     .slideDown(200)
		     .siblings('dd')
		     .slideUp(200);
		
	});
	$('div.dugme').on('click',function(){
           $('div.forma').slideToggle(1000);              
	});
	$('div.responsive-nav').on('click',function(){
           $('nav.navigacija').slideToggle(1000);
	});

	})();