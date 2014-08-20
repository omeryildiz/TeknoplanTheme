	$("#list-special a").click(function(){
		var value = $(this).attr("href");
		//alert(value);
		$('#container_replace').load(value);
		return false;
	});