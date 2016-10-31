


$(function(){

	/**
	 * style the price pists (if any)
	 */
	var $priceListTables = $('table.priceList');
	$priceListTables.each(function(key, value){
		$(value).find('tr:odd').addClass('oddRow');
	});

});