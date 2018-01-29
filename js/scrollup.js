$(document).ready(function(){
 
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('#up-btn').fadeIn();
} else {
$('#up-btn').fadeOut();
}
});
 
$('#up-btn').click(function(){
$("html, body").animate({ scrollTop: 0 }, 1000);
return false;
});
 
});