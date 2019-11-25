var $grid = $('.grid').isotope({
	itemSelector: '.grid-item',
	getSortData: {
		category: '[data-category]',
		weight: function (itemElem) {
			var weight = $(itemElem).find('.weight').text();
			return parseFloat(weight.replace(/[\(\)]/g, ''));
		}
	}
});

$('#filters').on('click', 'button', function () {
	var filterValue = $(this).attr('data-category');
	filterValue = filterFns[filterValue] || filterValue;
	$grid.isotope({
		filter: filterValue
	});
});
