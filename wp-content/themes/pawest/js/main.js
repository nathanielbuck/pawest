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
	$('.qa_radio').click(function () {
		var $this = $(this);
		var $qa = $this.closest('.qa');
		var $result = $qa.find('.qa_result');
		var result_message = '';

		if ($this.parent('.qa_answer').hasClass('qa_answer--correct')) {
			result_message += 'Correct!';
			$qa.addClass('qa--correct');
			$qa.find('.qa_label, .qa_radio').prop('disabled', true);
		}

		else {
			result_message += 'Incorrect. Try again.';
		}

		$result.text(result_message);
	});
});
