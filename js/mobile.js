$(function(){
	btn();
	//To change navigation button's color
	function btn(){
		var scrollHeight,
			homeHeight = $('.home').innerHeight(),
			aboutTop = $('#about-top').innerHeight()+homeHeight,
			aboutBottom = $('#about-bottom').innerHeight()+aboutTop,
			prtUbc = $('#portfolio-ubc').innerHeight()+aboutBottom,
			prtNwp = $('#portfolio-nwp').innerHeight()+prtUbc,
			prtEcm = $('#portfolio-ecm').innerHeight()+prtNwp,
			prtRgk = $('#portfolio-rgk').innerHeight()+prtEcm,
			prtWzb = $('#portfolio-wzb').innerHeight()+prtRgk,
			prtEas = $('#portfolio-eas').innerHeight()+prtWzb,
			conTact = $('#contact').innerHeight()+prtEas;
			
			
			$(window).on('scroll',function(){
				scrollHeight = $(this).scrollTop()+14;//btn's padding is 14px
					if(
						scrollHeight<homeHeight||
						aboutTop<scrollHeight&scrollHeight<aboutBottom||
						prtNwp<scrollHeight&scrollHeight<prtEcm||
						prtRgk<scrollHeight&scrollHeight<prtWzb
					){
						$('.icon-bar').css('background-color','#151515');
					}
					
					if(
						homeHeight<scrollHeight&scrollHeight<aboutTop||
						aboutBottom<scrollHeight&scrollHeight<prtNwp||
						prtEcm<scrollHeight&scrollHeight<prtRgk||
						prtWzb<scrollHeight&scrollHeight<prtEas||
						prtEas<scrollHeight&scrollHeight<conTact
					){
						$('.icon-bar').css('background-color','#fff');
					} 
			});
	}
	//To change navigation's height
	function mbnavresize(){
		var browserHeight = $(window).height(); 
		$('#mobile-nav').css("height",browserHeight);
	}
	//To execute when window is resized
	$(window).resize(function(){
		btn();
		mbnavresize();
	});
	
	$("#show").click(function(){
			if($("#abbr").hasClass("on") === true){
				$("#abbr").removeClass("on")
						  .slideUp(800,'easeInOutQuint');
						  $('#show').html('Show More');
			}else if($("#abbr").hasClass("on") === false){
				$("#abbr").addClass("on")
						  .slideDown(800,'easeInOutQuint');
						  $('#show').html('Hide');
			}
	});	
		
	var panelId = $('.panel').attr('id');
	//To change navigation's link for each work page
	var $mobnav = $('.mobile-nav');
	$('#btn').click(function(){
		if(	panelId=='ubcbaja'){
			window.location.replace('http://mobile.toruinamoto.com/index.php#portfolio-ubc');
		}else if( panelId=='newsportal'){
			window.location.replace('http://mobile.toruinamoto.com/index.php#portfolio-nwp');
		}else if( panelId=='ecommerce'){
			window.location.replace('http://mobile.toruinamoto.com/index.php#portfolio-ecm');
		}else if( panelId=='reggiekey'){
			window.location.replace('http://mobile.toruinamoto.com/index.php#portfolio-rgk');
		}else if( panelId=='wazabibuzz'){
			window.location.replace('http://mobile.toruinamoto.com/index.php#portfolio-wzb');
		}else if( panelId=='typography'){
			window.location.replace('http://mobile.toruinamoto.com/index.php#portfolio-eas');
		}else{
			
			if($mobnav.css('display') == 'none'){
				mbnavresize();
				$('#pageContent').addClass('mobile-wrapper');
				$mobnav.css('display','block');
			}
			else
			{
				$('#pageContent').removeClass('mobile-wrapper');
				$mobnav.css('display','none');
			}
		}
	
	});
	//To scroll to next section	
	$('.nav').click(function() {
		var target = $(this.hash);
		if (target) {
			if($mobnav.css('display') == 'block'){
				$('#pageContent').removeClass('mobile-wrapper');
				$mobnav.css('display','none');
			}
			var targetOffset = target.offset().top;
				$('html,body').animate({scrollTop: targetOffset},800,'easeInOutQuint');
				return false;
		}
	});	
	//contact form
	var form = $('#contact-form');
	var formMessages = $('#form-messages');
	$(form).submit(function(e) {
		e.preventDefault();
		$('#sending').css('visibility','visible');
		var formData = $(form).serialize();
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			$('#sending').css('visibility','hidden');
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');
			$(formMessages).text(response);
			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		})
		.fail(function(data) {
					$('#sending').css('visibility','hidden');
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});
	});
	
});	
