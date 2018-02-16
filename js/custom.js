$(document).ready(function() {
	$('#fullpage').fullpage({

		//basic setup
		sectionsColor: ['rebeccapurple', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
		anchors: ['welcome', 'about', 'gallery', 'contact'],
		scrollingSpeed: 1000,

		//navigation buttons
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['Welcome', 'About', 'Gallery', 'Contact'],

		//accessibility
		keyboardScrolling: true,

		//design
		controlArrows: true,
		verticalCentered: false,
		fixedElements: '#header, .footer',
	});
});