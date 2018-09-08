<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme21
 */

get_header();


?>
<div class="hero">
	<div class="hero-wrap">
		<h1 class="hero-title">Rob Crozier</h1>
			<div class="logo">logo here</div>
			<ul class="hero-tag">
				<li>Developer</li>
				<li>Creative</li>
				<li>Decent Guy</li>
			</ul>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">




<!-- home page Portfolio loop -->
		<?php
		query_posts('cat=2');

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?> </h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );


			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?><!-- end portfolio loop -->
	</main><!-- #main -->
</div><!-- #primary -->


<section class="bio-section">
	<div class="bio-wrap">
		<h3>who is this guy?</h3>
		<p>Cloud bread chicharrones pinterest tbh migas meh, four loko flannel fanny pack af viral whatever tilde. Lyft irony fam art party, hoodie hella tacos flannel dreamcatcher paleo heirloom post-ironic migas. VHS gochujang snackwave celiac, viral vexillologist taxidermy meditation fanny pack quinoa adaptogen af four loko sartorial green juice. Man bun tote bag live-edge, next level street art fingerstache prism irony adaptogen vice portland etsy plaid seitan air plant. Snackwave kitsch umami, disrupt four loko brooklyn edison bulb. Raclette church-key tattooed, shabby chic slow-carb cred mumblecore hella pabst cliche four dollar toast literally everyday carry DIY before they sold out.</p>
	</div>
</section>

	<section class="cta">
		<div class="cta-wrap">
			<a class="button" href="index.php/contact">Get a Quote</a>
		</div>
	</section>


<?php
