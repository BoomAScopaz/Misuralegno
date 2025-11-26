export default (length = 0, images = {}, perView = 9) => {
	return {
		count: length,
		images: images,
		perView: perView,
		pag: perView,

		init() {
			this.calcPage()
			window.addEventListener('resize', () => {
				this.calcPage()
			})
		},

		calcPage() {
			if(window.innerWidth < 1024) {
				this.perView = 8;
				this.pag = 8;
			}
			if(window.innerWidth > 1024) {
				this.perView = 9;
				this.pag = 9;
			}
		},

		showMore() {
	        this.pag += this.perView; 
	    }

	}
}