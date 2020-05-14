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
 * @package Light_World
 */

get_header();
?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main">

			<div class="container">

				<div class="row mt-3">

					<div class="col-md-8">

						<div style="text-align: center; background-color: #f6f6f6;">

               				<div class="mb-5 pt-5 pb-5">

								<h1>Inspiration</h1>
								
							</div>
							  
           				 </div>

					</div>

				</div>

				<div class="row">

					<div class="col-md-8">

						<?php 
						if ( have_posts() ) :
		
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

							get_template_part('template-parts/content', 'none');

						endif;
						?>

					</div>

					<div class="col-md-4">

					  <?php	get_sidebar(); ?>

					</div>

				</div>

			</div>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_footer();
