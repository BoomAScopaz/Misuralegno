import { gsap } from "gsap/dist/gsap";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const Animations = {

	trigger: 'body',

	init() {	

		// mask left
		gsap.utils.toArray(".mask").forEach((el) => {
		    const father = el.closest('.img-wrap');
		    const button = father ? father.querySelector('button') : null;

		    const tl = gsap.timeline({
		        scrollTrigger: {
		            trigger: el,
		            start: "top 90%",
		            end: "bottom 60%",
		            scrub: false,
		            markers: false
		        }
		    });

		    tl.to(el, {
		        clipPath: "polygon(0% 0%, 100% 0, 100% 100%, 0% 100%)",
		        duration: 1,
		        ease: "power2.inOut",
		    });

		    if (button) {
		        tl.to(button, {
		            opacity: 1,
		            y: 0,
		            duration: 0.25,
		            ease: "power2.out",
		        });
		    }
		});



		// appear up  
	    gsap.utils.toArray(".appear-up").forEach((el, i) => {    
	      let animatedEl = el.querySelectorAll('.anim-el')
	      gsap.fromTo(animatedEl, {
	        opacity: 0,
	        y: '10%',
	      }, {
	        opacity: 1,
	        y: 0,
	        duration: 0.5,
	        stagger: 0.125,
	        ease: "power2.out",
	        scrollTrigger: {
	          trigger: el,
	          start: "top 70%",
	          scrub: false,
	        }
	      });
	    });


	}

}

export default Animations;