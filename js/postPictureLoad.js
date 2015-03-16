$(document).ready(function(){
	$("[data-src]").each(function(index, elem){
		elem = $(elem);
		
		elem.attr("src", elem.attr("data-src"));
	});
});