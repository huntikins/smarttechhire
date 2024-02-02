// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				'lato': ['Lato', ...defaultTheme.fontFamily.sans],
				'josefin': ['"Josefin Sans"', ...defaultTheme.fontFamily.sans],
				'josefin-slab': ['"Josefin Slab"', '"Josefin Sans"', ...defaultTheme.fontFamily.sans],
			},
			colors: {
				light: '#FEFEFE',
				foreground: '#D9D9D9',
				primary: '#0652E9',
				secondary: '#38B6FF',
				tertiary: 'rgba(56, 182, 255, 0.5)',
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		require('@tailwindcss/forms'),
		require('@tailwindcss/aspect-ratio'),
		require('@tailwindcss/container-queries'),
	],
};
