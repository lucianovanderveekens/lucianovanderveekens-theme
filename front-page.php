<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lucianovanderveekens-theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<div id="about" class="container mx-auto px-4 md:mt-36">
		<h1 class="text-4xl font-bold text-blue">About</h1>
		<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center justify-items-center md:mt-20">
			<div class="sm:col-span-4">
				<img src=<?php echo get_template_directory_uri() . "/images/luciano2.jpeg" ?> alt="Luciano">
			</div>
			<div class="sm:col-span-7 sm:col-start-6 whitespace-pre-line">
				Hello! My name is Luciano and I enjoy building complex systems and the challenges that come with it. I’ve studied Computer Science at Utrecht University and I’m currently helping customers buy their groceries online at Albert Heijn.

				My main interests are sofware architecture and writing clean code.

				Here's a list featuring the technologies I'm most comfortable with:
				<div class="flex flex-wrap">
					<ul class="block colored-bullets">
						<li>Java</li>
						<li>Kotlin</li>
						<li>Go</li>
						<li>Spring Boot</li>
					</ul>
					<ul class="block colored-bullets">
						<li>Docker</li>
						<li>Kubernetes</li>
						<li>Postgres</li>
						<li>MongoDB</li>
					</ul>
					<ul class="block colored-bullets">
						<li>Git</li>
						<li>Maven</li>
						<li>Jenkins</li>
						<li>Linux</li>
					</ul>
				</div>

				<!-- <h2 class="text-4xl font-bold">Hi, my name is</h2>
				<h1 class="text-5xl font-extrabold"><span class="text-orange">Luciano van der Veekens</span>.</h1>
				<h3 class="text-2xl">I’m a software engineer specializing in architecting, creating, testing and maintaining back-end applications.</h3> -->
			</div>
		</div>
	</div>

	<div id="experience" class="container mx-auto px-4 md:mt-36">
		<h1 class="text-4xl font-bold text-blue">Experience</h1>
		<div class="md:mt-20">
			<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center ">
				<div class="sm:col-span-3">
				</div>
				<div class="whitespace-pre-line sm:col-span-9">
					I started out in a small team working on Albert Heijn for the Google Assistant which allowed customers to use their voice to, for example, search for recipes or add products to their shopping list.

					Eventually that team grew and became responsible for setting up a digital AI assistant to automatically handle customer support queries or, in case it couldn’t figure out the customer’s intent, hand over the conversation to a human agent.

					Technoglogies: Java - Kotlin - Spring Boot - Docker - Kubernetes - Postgres - MongoDB - Kafka
				</div>
			</div>

		</div>
	</div>

	<div id="contact" class="">
		<h1>Contact</h1>
	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
