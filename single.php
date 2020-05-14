<?php
/**
 * The template for displaying all single posts.
 *
 * @package cornerstone
 */

get_header(); ?>

<div class="wrapper" id="single-wrapper">

    <div  id="content" class="container">

        <div class="row mt-3">

            <div id="primary" class="col-md-8 content-area">

                <main id="main" class="site-main" role="main">

                    <div style="text-align: center; background-color: #f6f6f6;">

                        <div class="mb-3 pt-5 pb-5">

                            <h1><?php the_title(); ?></h1>
 
                        </div>

                    </div>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'single' ); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

                    <h3 class="mt-3 mb-3">Get Some More Inspiration...</h3>

                    <?php tfs_post_nav(); ?>

                </main><!-- #main -->

            </div><!-- #primary -->

            <div class="col-md-4">

              <?php get_sidebar(); ?>

            </div>

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
