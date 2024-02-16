// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: {
		transform: (content) => content.replace(/taos:/g, ''),
		files: ['./theme/**/*.php'],
	},
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				lato: ['Lato', ...defaultTheme.fontFamily.sans],
				josefin: ['"Josefin Sans"', ...defaultTheme.fontFamily.sans],
				'josefin-slab': [
					'"Josefin Slab"',
					'"Josefin Sans"',
					...defaultTheme.fontFamily.sans,
				],
			},
			colors: {
				light: '#FEFEFE',
				foreground: '#D9D9D9',
				primary: '#0652E9',
				secondary: '#38B6FF',
				tertiary: 'rgba(56, 182, 255, 0.5)',
			},
			keyframes: {
				'fade-in': {
					'0%': { opacity: 0 },
					'50%': { opacity: 0.6 },
					'100%': { opacity: 1 },
				},
			},
			animation: {
				'fade-in': 'fade-in 1s ease-in',
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	safelist: [
		'!duration-[0ms]',
		'!delay-[0ms]',
		'html.js :where([class*="taos:"]:not(.taos-init))'
	  ],
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		require('@tailwindcss/forms'),
		require('@tailwindcss/aspect-ratio'),
		require('@tailwindcss/container-queries'),
		require('tailwindcss-animation-delay'),
		require('taos/plugin')
	],
};
