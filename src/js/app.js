import Swiper, { Navigation } from "swiper"
import "swiper/css"
// import "swiper/css/navigation"
Swiper.use([Navigation])

const app = {
	data() {
		return {
			menuActive: false,
			guideDesTailles: false,
		}
	},
}

Vue.createApp(app).mount("#page")

const swiperListProducts = new Swiper(".swiper-list-products", {
	speed: 400,
	slidesPerView: "auto",

	breakpoints: {
		1024: {
			enabled: false,
		},
	},
})

const swiperSingleProduct = new Swiper(".swiper-single-product", {
	speed: 400,
	slidesPerView: 1,
	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
})
