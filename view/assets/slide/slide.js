$(function(){
	
	var liwidth = $("#galeria ul li").outerWidth(),
	speed = 2000;
	rotate = setInterval(auto,speed);
	
	//mostra os botoes
	$("section#galeria").hover(function(){
		$("section#buttons").fadeIn();
		clearInterval(rotate);
		
	},function(){
		$("section#buttons").fadeOut();
		rotate = setInterval(auto,speed);
		
	});
	
	//proximo
	
	$(".next").click(function(e){
		e.preventDefault();
		
		$("section#galeria ul").css({'width':'99999%'}).animate({left:-liwidth},function(){
		$("#galeria ul li ").last().after($("#galeria ul li").first());
		$(this).css({'left':'0','width':'auto'});
		
		});
		
	});
	
	//voltar
	
	$(".prev").click(function(e){
		e.preventDefault();
		
		
		$("#galeria ul li").first().before($("#galeria ul li").last().css({'margin-left':-liwidth}));
		$("section#galeria ul").css({'width':'99999%'}).animate({left:liwidth},function(){
			$("#galeria ul li").first().css({'margin':'0'});
			$(this).css({'left':'0','width':'auto'})
			
		});
		
	});
	function auto(){
		$(".next").click();
	}
	
	
});