$(document).ready(function() {
	
// 	voegt het slide-effect toe aan alles met class .slideMenu
	$(".slideMenu > h2").click(function() {
		 $(this).siblings('ul').slideToggle();
		 $(this).toggleClass("activated");
	});
	
//	Laat de tabel met afspraken uitschuiven als er dubbel op geklikt word
	$(".listing > tbody > tr:not(:first)").dblclick(function() {
		if ($(this).height() === 28) {
			$(this).animate({
				height: 40
			},{
				duration: 100
			});
			$(this).addClass('editing');
			var _sHTML;
			var _intWidth;
			$(this).children('td').not(':last').each(function(index) {
			  _sHTML = '<input type="text" value="' + $(this).html() + '" />';
			  _intWidth = $(this).width();
			  $(this).width(_intWidth);
			  console.log(_intWidth);
			  $(this).html(_sHTML);
			});
			_sHTML = '<img src="img/hr.gif" />\n<img src="img/save-icon.gif" width="18" height="18" />';
			$(this).children('td:last').html(_sHTML);
			// var _strHTML = '<input type="text" value="' + $(this).attr('id') + '" />'
			// $(this).append('<br /><input type="text" />');
		} else {
			$(this).animate({
				height: 28
			},{
				duration: 200
			});
			var _sHTML;
			$(this).children('td').not(':last').each(function(index) {
			  var _value = $(this).children('input:text').val();
			  $(this).html(_value);
			  console.log(_value);
			  /*
			   * De AJAX functie!!!
			   */
			});
		}
	});
});

function echo(value) {
	alert(value);
}