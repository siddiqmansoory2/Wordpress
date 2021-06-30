/**!
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

	});

}(jQuery));

//Remove page loader when the page has fully loaded
window.onload = function () {
	var element = document.getElementById('loading');
	element.classList += " hidden";
}

jQuery(function() {
    jQuery('body').removeClass('fade-out');
});
