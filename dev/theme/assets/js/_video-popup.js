export default () => {
	return {
		isOpen: false,
		videoUrl: '',

		openPopup(url = '') {
			if(url != '') {
				this.isOpen = true
				this.videoUrl = url
			}
			console.log(this.openPopup,this.videoUrl)
		},
		
		closePopup() {
			this.isOpen = false
			this.videoUrl = ''
			console.log(this.openPopup,this.videoUrl)
		},

	}
}