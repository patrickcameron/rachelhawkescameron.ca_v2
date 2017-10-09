$(function() {

	$('.gallery').flickity({
		wrapAround: true,
		imagesLoaded: true,
		lazyLoad: 2,
		setGallerySize: false,
		pageDots: false,
		cellSelector: '.gallery-cell'
	});

});
