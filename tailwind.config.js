module.exports = {
	purge: [
		"./src/**/*.html",
		"./src/**/*.vue",
		"./src/**/*.jsx",
		"./**/*.php",
	],
	theme: {
		colors: {
			dark: "#00282a",
			light: "#f4eceb",
			red: "#e83f40",
			green: "#005461",
		},
		container: {
			padding: {
				DEFAULT: "1.5rem",
				sm: "3rem",
				lg: "4vw",
			},
			center: true,
		},
		fontFamily: {
			base: ["Lato", "sans-serif"],
			title: ["termina", "sans-serif"],
		},
		fontSize: {
			xs: ["0.75rem", { lineHeight: "1.5" }],
			sm: ["0.9375rem", { lineHeight: "1.5" }],
			base: ["1.125rem", { lineHeight: "1.6" }],
			lg: ["1.375rem", { lineHeight: "1.6" }],
			xl: ["1.125rem", { lineHeight: "1.6" }],
			"2xl": ["1.375rem", { lineHeight: "1.25" }],
			"3xl": ["2.4rem", { lineHeight: "1" }],
		},
		screens: {
			sm: "640px",
			md: "768px",
			lg: "1024px",
			xl: "1280px",
			xxl: "1480px",
		},
	},
	variants: {},
	plugins: [],
}
