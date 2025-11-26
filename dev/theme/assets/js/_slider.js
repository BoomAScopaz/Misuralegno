import Swiper from 'swiper/bundle';
// import 'swiper/swiper.css'

const Slider = {

	trigger: '.slideshow_realizations',

	init() {	
		const swiper = new Swiper('.swiper', {
			centeredSlides: true,
			loop: false,
			slidesPerView: 1.33,
			spaceBetween: 20,
			navigation: {
		      nextEl: ".next-slide",
		      prevEl: ".prev-slide",
		    },
		    breakpoints: {
		    	1024: {
		            slidesPerView: 2.5,
		            spaceBetween: 40,
		        },
		    }
,		});

		// jQuery(document).ready( $ => {
		// 	$('body').css('background','#f78')
		// })
	}

}

export default Slider;