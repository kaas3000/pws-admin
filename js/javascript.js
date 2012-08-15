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
	
// 	Laat het leraar-filter werken
	$(".leraren > ul > li > label > input").change(function(){
		// Alle andere aangevinkte checkboxes uitvinken
		$(this).parents("label").parents("li").siblings().each(function(){
			$(this).children("label").children("input:checkbox").attr("checked", false);
		});
		
		// De kolommen die niet matchen eruit gooien
		var leraar = $(this).parents("label").html().substr(0,3);
		if (this.checked) {
			$(".listing tr td").each(function() {
				if ($(this).html() === leraar) {
					$(this).parents("tr").siblings("tr:gt(0)").each(function() {
						if ($(this).children("td:eq(2)").html() === leraar) {
							// Doe niets
						} else {
							$(this).hide();
						}
					});
				}
			});
		} else {
			$(".listing tr:hidden").each(function() {
				$(this).show();
			});
		}
	});
	
});

function echo(value) {
	alert(value);
}