<?php
/**
 * @package cornerstone
 */
?>

<?php if(get_post_format() == '' || get_post_format() == 'standard') { ?> 

<article id="post-<?php the_ID(); ?>" <?php post_class('card mb-5 p-3 post'); ?> style="background-color: #f9f9f9;">

	<a href="<?php the_permalink(); ?>">

		<?php echo get_the_post_thumbnail( $post->ID, 'full card-img-top' ); ?> 

	</a>

	<div class="card-body">

		<?php the_title( sprintf( '<h2 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
                        
			<div class="mb-2" style="text-align: center;"><?php echo "Posted on " . get_the_date(); ?></div>

		<?php endif; ?>

		<?php

		the_excerpt();

		?>
		
		<div style="text-align: center;">
	
			<a href="<?php the_permalink(); ?>" class="button" title="Read More">Read More</a>

		</div>

	</div><!-- .card-body -->

</article><!-- #post-## -->

<?php } ?> 