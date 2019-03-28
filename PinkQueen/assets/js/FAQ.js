$(document).ready(function () {
	$('.acc h3').click(function () {
		$(this).next('.faq-content').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.faq-content').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});