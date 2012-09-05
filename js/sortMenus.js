$(document).ready(function(){
	/*
	 * arrEisen[0]  =  leraar (roostercode: VGL)
	 * arrEisen[1]  =  tijd (vroeg/midden/laat)
	 * arrEisen[2]  =  lokaal (integer)
	 */
	var arrEisen = new Array();
	$(".leraren > ul > li > label > input").change(function(){
		// Alle andere aangevinkte checkboxes uitvinken
		$(this).parents("label").parents("li").siblings().each(function(){
			$(this).children("label").children("input:checkbox").attr("checked", false);
		});
		
		if (!this.checked) {
			arrEisen[0] = null;
			sortRooster();
		} else {
			arrEisen[0] = $(this).attr("id");
			sortRooster();
		}
	});
	
	$(".tijden > ul > li > label > input").change(function() {
		// Alle andere aangevinkte checkboxes uitvinken
		$(this).parents("label").parents("li").siblings().each(function(){
			$(this).children("label").children("input:checkbox").attr("checked", false);
		});
		
		if (!this.checked) {
			arrEisen[1] = null;
			sortRooster();
		} else {
			arrEisen[1] = $(this).attr("id");
			sortRooster();
		}
	});
	
	$(".lokalen > ul > li > label > input").change(function() {
		// Alle andere aangevinkte checkboxes uitvinken
		$(this).parents("label").parents("li").siblings().each(function(){
			$(this).children("label").children("input:checkbox").attr("checked", false);
		});
		
		if (!this.checked) {
			arrEisen[2] = null;
			sortRooster();
		} else {
			arrEisen[2] = $(this).attr("id")
			sortRooster();
		}
	})
	
	function sortRooster() {
		$(".listing tr:gt(0)").each(function() {
			var intCounter = 0;
			$(this).hide();
			if ($(this).children("td:eq(2)").html() === arrEisen[0]) {
				intCounter++;
			}
			if ($(this).children("td:eq(0)").hasClass(arrEisen[1])) {
				intCounter++;
			}
			if ($(this).children("td:eq(3)").html() === arrEisen[2]) {
				intCounter++;
			}
			
			var arrEisen_length = 0;
			if (arrEisen[0]) {
				arrEisen_length++;
			}
			if (arrEisen[1]) {
				arrEisen_length++;
			}
			if (arrEisen[2]) {
				arrEisen_length++;
			}
			
			if (arrEisen_length === intCounter) {
				$(this).show();
			}
		});
	}
});
