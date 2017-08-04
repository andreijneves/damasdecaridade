$(document).ready(function() {
	$('.destaques').slick({
		  dots: true,
		  //infinite: false,
		  //speed: 300,
		  arrows:true,
		  slidesToShow: 1,
		  //slidesToScroll: 4,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        //slidesToShow: 3,
		        //slidesToScroll: 3,
		        ///infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 414,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
	]});



});