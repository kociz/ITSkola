(function($){
	var sliderUL=$('div.slider').css('overflow','hidden').children('ul'),
	      imgs=sliderUL.find('img'),
	      imgWidth=imgs[0].width,
	      imgLen=imgs.length,
	      current=1,
	      totalImgsWidth=imgLen*imgWidth;

	      $('.slider-nav').show().find('button').on('click',function(){
	      	   var direction=$(this).data('dir'),
	      	       loc=imgWidth;

	      	    // updating current
	      	    (direction==='next')? ++current:--current;
	      	   /* if(direction===next){
	      	    	current+=1;
	      	    }else{
	      	    	current-=1;
	      	    }*/
	      	    if(current===0){
	      	    	current=imgLen;
	      	    	direction='next';
	      	    	loc=totalImgsWidth-imgWidth;
	      	    	
	      	    }else if(current-1===imgLen){
	      	    	current=1;
	      	    	loc=0;

	      	    }
	      	    transition(sliderUL,loc,direction);
	      	   	      });
             function transition(container,loc,direction){
             	var unit;
             	if(direction && loc !==0){
             		unit=(direction==='next')? "-=":"+=";             	}
             	container.animate({
             		'margin-left':unit?(unit+loc):loc
             	});
             }
})(jQuery);