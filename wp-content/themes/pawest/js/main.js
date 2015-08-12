$(document).ready(function () {
	/**
	 * Filter for the Events page.
	 */
	$('.filter').click(function () {
		var $this = $(this);
		var filter = $this.attr('aria-controls'); 
		var numEvents = $('.event').show().length;
		var numEventsHidden = $('.event').not('.' + filter).hide().length;

		$('.filter').removeClass('filter--active');
		$this.addClass('filter--active');
		if (0 === numEvents - numEventsHidden) {
			$('.no-events').show();
		}
		else {
			$('.no-events').hide();
		}
		return false;
	});
});
