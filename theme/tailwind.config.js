module.exports = {
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		"./**/*.php",
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				lato: ["Lato"],
				josefin: ['"Josefin Sans"'],
				"josefin-slab": ['"Josefin Slab"', '"Josefin Sans"'],
			},
		},
	},
	plugins: [
		require("@tailwindcss/forms"),
		require("@tailwindcss/aspect-ratio"),
		require("@tailwindcss/container-queries"),
	],
};
