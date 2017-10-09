$(function() {

	console.log( 'scripts.js loaded' );

	$('.gallery').flickity({
		wrapAround: true,
		imagesLoaded: true,
		setGallerySize: false,
		pageDots: false,
		cellSelector: '.gallery-cell'
	});

});
