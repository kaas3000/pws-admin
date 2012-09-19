$(document).ready(function() {
	
// 	voegt het slide-effect toe aan alles met class .slideMenu
	$(".slideMenu > h2").click(function() {
		 $(this).siblings('ul').slideToggle();
		 $(this).toggleClass("activated");
	});

//	Laat de tabel met afspraken uitschuiven als er dubbel op geklikt word
	$(".listing > tbody > tr:not(:first)").dblclick(function() {
		if ($(this).height() <= 30 ) {
			$(this).animate({
				height: 40
			},{
				duration: 150
			});
			$(this).addClass('editing');
			var _sHTML;
			var _intWidth;
			$(this).children('td').not(':last').each(function(index) {
				switch (index) {
					case 1:
						_sHTML = '<input type="text" value="' + $(this).html() + '" />';
						_intWidth = $(this).width();
						$(this).width(_intWidth);
						$(this).html(_sHTML);
						// var _source// = ["c++", "java", "php", "coldfusion", "javascript", "asp", "ruby", "python", "c", "scala", "groovy", "haskell", "perl"];
						// var _source = [ "Ronald Dunnewind (19)", "Bauke van der Woude (21)", "Olaf van der Woude (21)", "Gerrit van der Woude (21)", "Kees  De Feijter (19)", "pauze pauze (0)", "Bram Eikelboom (20)", "Gerrit Eikelboom (20)", "Olaf Eikelboom (20)" ];
						var _source = $.ajax({
							url: "ajax.php?opdracht=autofill",
							dataType: "html",
							async: false,
							success: function(data) {
										return data;
									}
						}).responseText;

						console.log(typeof(_source));
						$(this).children('input').autocomplete({
							source: _source
						});
					break;
					default:
						_sHTML = '<input type="text" value="' + $(this).html() + '" />';
						_intWidth = $(this).width();
						$(this).width(_intWidth);
						$(this).html(_sHTML);
					break;
				}
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
			$(this).removeClass('editing');
			var _sHTML;
			var _arrPost = Array;
			$(this).children('td').not(':last').each(function(index) {
			  var _value = $(this).children('input:text').val();
			  $(this).html(_value);
			  /*
			   * De AJAX functie!!!
			   */
			  switch (index) {
			  	case 0:
			  		var arrTijden = $(this).html().split(' - ');
			  		// _arrPost[0] = $(this).html().substr(0, 8);
			  		_arrPost[0] = arrTijden[0];
			  		_arrPost[1] = arrTijden[1]
			  		break;
			  	case 1:
			  		_arrPost[2] = $(this).attr('id');
			  		break;
			  	case 2:
			  		_arrPost[3] = $(this).html();
			  		break;
		  		case 3:
		  			_arrPost[4] = $(this).html();
		  			break;
			  }
			  _arrPost[5] = $(this).parents('tr').attr('id');
			});
			
			console.log(_arrPost);
			$(this).children('td:last').html('<input type="checkbox">');
			
			$.ajax({
				type: 'POST',
				url: 'ajax.php',
				data: {
					opdracht: 'updateAfspraak',
					startTijd: _arrPost[0],
					eindTijd: _arrPost[1],
					leerling_ID: _arrPost[2],
					roostercode: _arrPost[3],
					lokaal_ID: _arrPost[4],
					id: _arrPost[5]
				},
				success: function(data) {
					if (data === "1") {
// 						Do someting
					}
				}
			});
		}
	});
});

function echo(value) {
	alert(value);
}