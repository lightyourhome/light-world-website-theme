<?php /* Template Name: Lighting Ideas- Glam */ ?>
	<?php get_header(); ?>
		<div class="wrapper" id="sale-page-wrapper">
			<div id="content" class="container-fluid">
				<div id="primary" class="content-area col-md-12">
					<main id="main" class="site-main" role="main">
						<div class="row justify-content-center mt-3" style="background-color: #fbfbfb;">
							<div class="col-md-12 col-12 mt-3 mb-3">
								<div class="prod_cat_text">
									<h1 class="prod-cat-title">Glam</h1> </div>
							</div>
						</div>
						<!-- GLAM -->
						<div class="row mt-5 mb-5">
							<div class="col-md-3 mt-3" style="background-color: #e8e8e8;">
								<div style="border: 3px solid #000;" class="p-3 mt-3">
									<div class="prod_cat_text mt-3 mb-3">
										<h1 class="prod-cat-title">Glam</h1>
										<h3>The Art of Glam</h3> </div>
									<p style="text-align: left;">Glam is glitz. It's luxorious. It's all that glitters. Glam does not, however, have to be the drama queen or the loud scene. It actually has a sensibility and a flexibility that can make it mor gracious or more gradiose - without being overwhelming.</p>
									<p style="text-align: left;">You get to decide how Glam you want to go. The style is inspired by Old Hollywood, Art Deco, and time periods like the 70s. It's defined by features like touchable, plush farbircs, mirrored finishes, shiny metallics, and dramatic lighting. Glam has a magic to it, and it's easy to bring into your decor in a big way or small one.</p>
								</div>
								<!-- TIPS: GLAM SLIDER  -->
								<h3 class="mt-2">Tips for Glam</h3>
								<div class="lighting-tips mt-3">
									<div class="mr-2 ml-2" style="background-color: #424242;">
										<div class="p-2">
											<h4 class="p-2" style="border-bottom: 1px solid #FFD700; color: #fff;">Get Extravagant</h4>
											<p style="color: white; text-align: left;">Glam give you free rein to get as luxe as you wish. Lush velvet. Opulent trim. Faux fur. Satin. Whoever said you can't have a chandelier in every room? The trick is achieving your unique balance of understated and overstated to make the most sublime statement.</p>
										</div>
									</div>
									<div class="mr-2 ml-2" style="background-color: #424242;">
										<div class="p-2">
											<h4 class="p-2" style="border-bottom: 1px solid #FFD700; color: #fff;">Find Your Glam</h4>
											<p style="color: white; text-align: left;">Glam is what you want it to be. It's not all or nothing and is a surprisingly accommodating style. There's Retro Glam, Modern Glam, Vintage Glam. Even Farmhouse Glam. That's because the style has a blendability to it. Even the Glam color palettes suit many tastes. You can go monochromatic with pastels, high drama with black and white, or more regal with jewel tones. Versatility is always a virtue, and Glam has it.</p>
										</div>
									</div>
									<div class="mr-2 ml-2" style="background-color: #424242;">
										<div class="p-2">
											<h4 class="p-2" style="border-bottom: 1px solid #FFD700; color: #fff;">Catch the Light</h4>
											<p style="color: white;">Glam is shiny and sparkly. It's smooth and glossy. It's shimmery and loves to show off. A mirrored table with a pendant is a nice Glam touch, as is a crystal chandelier near a window or a mirror reflecting Art Deco lighting.</p>
										</div>
									</div>
									<div class="mr-2 ml-2" style="background-color: ##424242;">
										<div class="p-2">
											<h4 class="p-2" style="border-bottom: 1px solid #FFD700; color: #fff;">Add Interest with Accents</h4>
											<p style="color: white;">Deciding what it is you love about Glam can help you give the decor more drama. If it's the Old Hollywood history, go on a hunt for vintage movie posters. If it's art deco, find furniture and lighting inspired by that look. If you simply love everything sparkly, find interesting pieces like bejeweled mirrors and gold or silver-trimmed accents.</p>
										</div>
									</div>
								</div>
								<div class="lighting-ideas_tips_nav_container  mt-1">
									 <i class="prev-lighting-ideas-tips"></i>
									 <i class="next-lighting-ideas-tips"></i>
								  </div>
							</div>
							<div class="col-md-9 col-12 mt-3">
								<h2 class="mb-3">Glam Products</h2>
								<h3>Categories</h3>
								<div class="mt-2" style="text-align: center;">
									<select class="lighting-ideas-category-select">
										<option value="lighting-ideas-glam-chandeliers">Chandeliers</option>
										<option value="lighting-ideas-glam-bath">Bath</option>
										<option value="lighting-ideas-glam-pendants">Pendants</option>
										<!-- <option value="lighting-ideas-glam-sconces">Sconces</option> -->
										<option value="lighting-ideas-glam-semi-flush-mounts">Semi Flush Mounts</option>
									</select>
								</div>
								<div class="lighting-ideas-product-slider pl-3 pr-3 mt-3">
									<div>
                    <!-- 069-K52210PN,069-K52002FXG, 069-K84195CH -->
										<?php tfs_do_products_shortcode( array( 'columns' => 3, 'skus' => '069-E83624,069-K42030CH,069-K52024FXG' ) ); ?>
									</div>
								</div>
								<div id="lighting-ideas-glam-chandeliers" style="display: none;">
                  <div>
										<?php tfs_do_products_shortcode( array( 'columns' => 3, 'skus' => '069-E83624,069-K42030CH,069-K52024FXG' ) ); ?>
									</div>
								</div>
								<div id="lighting-ideas-glam-bath" style="display: none;">
									<div>
										<?php tfs_do_products_shortcode( array( 'columns' => 3, 'skus' => '069-K45713PNLED,069-K55025PN' ) ); ?>
									</div>
								</div>
								<div id="lighting-ideas-glam-pendants" style="display: none;">
									<div>
                    <!-- 069-K84195CH -->
										<?php tfs_do_products_shortcode( array( 'columns' => 3, 'skus' => '069-E83948' ) ); ?>
									</div>
								</div>
								<!-- <div id="lighting-ideas-glam-sconces" style="display: none;">
										<?php //tfs_do_products_shortcode( array( 'columns' => 3, 'skus' => '069-K85061CH,069-K84070CG' ) ); ?>
									</div> -->
								</div>
								<div id="lighting-ideas-glam-semi-flush-mounts" style="display: none;">
									<div>
										<?php tfs_do_products_shortcode( array( 'columns' => 3, 'skus' => '069-K44277PN, 069-K43748OZ' ) ); ?>
									</div>
								</div>
								<div class="lighting-ideas_products_nav_container mt-3 mb-3">
									<i class="prev-lighting-ideas-product-slider"></i>
									<i class="next-lighting-ideas-product-slider"></i>
								</div>
							</div>
						</div>
						<div class="col-md-12 mt-3" style="border-top: 2px solid #d3d3d3;"></div>
					</main>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>
