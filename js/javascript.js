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
				height: 100
			},{
				duration: 200
			});
		} else {
			$(this).animate({
				height: 28
			},{
				duration: 200
			})
		}
			// $(this).animate({height: "100px"},{duration: 1000});
			// $(this).animate({height: "15px"},{duration: 1000});
	});
});

function echo(value) {
	alert(value);
}