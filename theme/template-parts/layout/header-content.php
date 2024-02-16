<header id="header" class="absolute top-0 left-0 z-10 w-screen pt-3 md:pt-5 lg:pt-8">
	<nav id="secondary" class="flex items-center justify-between w-full px-6 mx-auto max-w-9xl md:px-8 lg:px-12">
		<div class="flex items-center justify-start lg:hidden animation-delay-100 animate-fade-in">
			<img class="block h-8 md:h-16 lg:h-24"
				src="/wp-content/themes/smarttechhire/theme/assets/logo_light_trans-bg.png" alt="">
			<div class="ml-2 text-xl font-black md:ml-3 md:text-2xl font-josefin text-light">SMART
				TECH HIRE</div>
		</div>

		<?php

		// wp_nav_menu(
// 	array(
// 		'container' => '',
// 		'container_class' => '',
// 		'container_id' => '',
// 		'menu' => 'secondary-social',
// 		'menu_class' => 'flex w-full animation-delay-100 animate-fade-in',
// 		'menu_id' => 'menu-secondary--social',
// 		'echo' => true,
// 		'fallback_cb' => false,
// 		'before' => '<li class="w-4 h-4 mr-2 hover:opacity-60 md:w-6 md:h-6 md:mr-4">',
// 		'after' => '</li>',
// 		'link_before' => '<svg class="fill-light" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#',
// 		'link_after' => '"></use></svg>',
// 		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
// 		'item_spacing' => 'preserve',
// 		'depth' => 0,
// 	)
// );
		?>
		<div class="items-center justify-end hidden lg:flex">
			<ul class="flex w-full animation-delay-100 animate-fade-in">
				<li class="w-4 h-4 mr-2 hover:opacity-60 md:w-6 md:h-6 md:mr-4"><a href="https://facebook.com"><svg
							class="fill-light" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>Facebook</title>
							<path
								d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
						</svg></a></li>
				<li class="w-4 h-4 mr-2 hover:opacity-60 md:w-6 md:h-6 md:mr-4">
					<a href="https://twitter.com"><svg class="fill-light" role="img" viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg">
							<title>X</title>
							<path
								d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
						</svg></a>
				</li>
				<li class="w-4 h-4 mr-2 hover:opacity-60 md:w-6 md:h-6 md:mr-4"><a href="https://linkedin.com"><svg
							class="fill-light" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>LinkedIn</title>
							<path
								d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
						</svg></a></li>
			</ul>
		</div>
		<div class="items-center justify-end hidden lg:flex">
			<ul class="flex w-full text-light animation-delay-100 animate-fade-in">
				<li class="mr-8">
					<a class="text-lg underline lg:text-xl hover:opacity-60"
						href="mailto:hello@smarttechhirecom">hello@smarttechhirecom</a>
				</li>
				<li>
					<a class="text-lg underline lg:text-xl hover:opacity-60" href="tel:+1-555-555-5555">+1 (555)
						555-5555</a>
				</li>
			</ul>
		</div>
		<div class="flex items-center justify-end lg:hidden animation-delay-100 animate-fade-in">
			<svg class="w-5 h-5 md:w-10 md:h-10 text-light" fill="none" viewBox="0 0 24 24"
				xmlns="http://www.w3.org/2000/svg">
				<path
					d="M22 18.0048C22 18.5544 21.5544 19 21.0048 19H12.9952C12.4456 19 12 18.5544 12 18.0048C12 17.4552 12.4456 17.0096 12.9952 17.0096H21.0048C21.5544 17.0096 22 17.4552 22 18.0048Z"
					fill="currentColor" />
				<path
					d="M22 12.0002C22 12.5499 21.5544 12.9954 21.0048 12.9954H2.99519C2.44556 12.9954 2 12.5499 2 12.0002C2 11.4506 2.44556 11.0051 2.99519 11.0051H21.0048C21.5544 11.0051 22 11.4506 22 12.0002Z"
					fill="currentColor" />
				<path
					d="M21.0048 6.99039C21.5544 6.99039 22 6.54482 22 5.99519C22 5.44556 21.5544 5 21.0048 5H8.99519C8.44556 5 8 5.44556 8 5.99519C8 6.54482 8.44556 6.99039 8.99519 6.99039H21.0048Z"
					fill="currentColor" />
			</svg>
		</div>
	</nav>
	<hr class="w-full my-4 mt-3 shadow-sm md:my-6 lg:my-8 border-t-1 border-light opacity-20">
	<nav id="primary"
		class="items-center justify-between hidden w-full px-6 mx-auto lg:flex max-w-9xl md:px-8 lg:px-12">
		<div class="flex items-center justify-start animation-delay-100 animate-fade-in">
			<img class="block h-8 md:h-16 lg:h-24"
				src="/wp-content/themes/smarttechhire/theme/assets/logo_light_trans-bg.png" alt="">
			<div class="ml-2 text-xl font-black md:ml-3 md:text-2xl lg:ml-5 lg:text-3xl font-josefin text-light">SMART
				TECH HIRE</div>
		</div>
		<div class="flex items-center justify-end uppercase animation-delay-100 animate-fade-in">
			<ul
				class="flex items-center justify-end text-base font-extrabold transition-opacity text-light font-josefin">
				<li class="ml-7 hover:opacity-60">
					<a href="#about-us">about us</a>
				</li>
				<li class="ml-7 hover:opacity-60">
					<a href="#who-we-serve">who we serve</a>
				</li>
				<li class="ml-7 hover:opacity-60">
					<a href="#who-we-place">who we place</a>
				</li>
				<li class="ml-7 hover:opacity-60">
					<a href="#our-team">our team</a>
				</li>
				<li class="ml-7 hover:opacity-60">
					<a href="#contact">contact</a>
				</li>
			</ul>
		</div>
	</nav>
</header>