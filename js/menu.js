$(document).ready(function() {
	$('.menu_icon').click(function(){
        $('.menu_icon').toggleClass('open-menu');
        $('.menu__body').toggleClass('open-menu');
        $('body').toggleClass('fixed-page');
	});
});