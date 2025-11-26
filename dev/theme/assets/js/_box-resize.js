export default () => {
	return {
		height: 0,
		updateHeight() {
			this.height = this.$refs.box.offsetHeight
			console.log(this.height)
		},
	}
}