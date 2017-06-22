
// ========= ========= ========= JQUERY =========== ========= =========
$(document).ready(function() {
	//  ========= M a i n   v a r i a b l e s =========
	var html = $('body').width();
	// ========= =========== =========== ===========
	$('#hamburger').on('click', function() {
		if(html < 767) {
			$('.nav').slideToggle('slow');
		}
	});

	// Go to top btn
	var top_show = 150,
		delay = 1000; 

	$(window).scroll(function () {
		if ($(this).scrollTop() > top_show) $('.btn__up').fadeIn();
		else $('.btn__up').fadeOut();
	});

	$('.btn__up').click(function () { 
		$('body, html').animate({
			scrollTop: 0
		}, delay);
	});

	// Fancybox
	$(".fancybox").fancybox({
		openEffect  : 'elastic',
		closeEffect : 'elastic'
	  });
});
// ========= =========== =========== ===========  ========= =========== =========== ===========