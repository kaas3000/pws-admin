$(document).ready(function(){
	$(".leraren > ul > li > label > input").change(function(){
		// Alle andere aangevinkte checkboxes uitvinken
		$(this).parents("label").parents("li").siblings().each(function(){
			$(this).children("label").children("input:checkbox").attr("checked", false);
		});
		
		// De kolommen die niet matchen eruit gooien
		var leraar = $(this).parents("label").html().substr(0,3);
		
		// Eventuele :hidden tabelregels weer laten verschijnen
		$(".listing tr:hidden").each(function(){
			if ($(this).children("td:eq(2)").html() === leraar) {
				$(this).show();
			}
		});
		
		// De kolommen die niet matchen eruit gooien (vervolg)
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
	
	$(".tijden > ul > li > label > input").change(function() {
		// Alle andere aangevinkte checkboxes uitvinken
		$(this).parents("label").parents("li").siblings().each(function(){
			$(this).children("label").children("input:checkbox").attr("checked", false);
		});
		
		var tijd = $(this).attr("id");
		
		$(".listing tr:hidden").each(function(){
			if ($(this).children("td:eq(0)").hasClass(tijd)) {
				$(this).show();
			}
		});
		
		if (this.checked) {
			$(".listing tr:gt(0)").each(function(){
				if (!$(this).children("td:eq(0)").hasClass(tijd)) {
					$(this).hide();
				}
			});
		} else {
			$("tr").each(function(){
				$(this).show;
			});
		};
	});
});
