<?php /* Template Name: Front Page April Start */ ?>

<?php get_header(); ?>

<div class="mobile-only">

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <img id="home-image" src="<?php echo site_url('/wp-content/uploads/2020/03/foyer_lights_mobile.jpg'); ?>">
            </div>
            <div class="col-md-12" style="background-color: #f6f6f6; text-align: center;">
                <div class="home-hero-desc">
                    <h3>Spring Sale</h3>
                    <p>Save on Chandeliers, Pendants and More!</p>
                    <a class="button mb-3" href="<?php echo site_url('/home/sales-and-promotions'); ?>">See The Sales</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="desktop-only">

  <a href="https://www.lightyourhome.com/home/sales-and-promotions/"><?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/03/spring_sale_banner_updated_2.jpg">', wp_get_attachment_metadata(163810), 163810 ); ?></a>

</div>

<div class="wrapper" id="page-wrapper">

    <div id="content" class="container">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

                <div class="row mt-5">
                    <!-- ROW 2 -->

                    <div class="col-md-12 mb-3" style="border-bottom: 2px solid #d3d3d3">
                        <h2>Popular Categories and More</h2>
                    </div>

                    <!-- BATH AND VANITY -->
                    <div class="col-md-6">
                        <div class="block-container">
                            <a href="<?php echo site_url('/product-category/bath-vanity-lights'); ?>">
                                <div class="block-picture">
                                    <img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2019/09/bath_and_vanity_home-e1569270702892.jpg">
                                </div>
                                <div class="block-caption-wrapper">

                                    <div class="block-caption-container">

                                        <h3 class="block-heading">Bath and Vanity Lights</h3>
                                        <h4 class="block-heading">Bring your bathroom to life</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/product-category/bath-vanity-lights'); ?>" class="block-shop-link">Shop Bath and Vanity</a>

                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="block-container">
                            <a href="<?php echo site_url('/product-category/chandeliers'); ?>">
                                <div class="block-picture">
                                    <img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2019/06/Dining-Room-Forge-43977BK-Day.jpg">
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">

                                        <h3 class="block-heading">Chandeliers</h3>
                                        <h4 class="block-heading">Hand picked and ready to go</h4>
		                                <a style="text-align: center;" href="<?php echo site_url('/product-category/chandeliers'); ?>" class="block-shop-link">Shop Chandeliers</a>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php if ( ! wp_is_mobile() ) : ?>

                        <!-- OUTDOOR -->
                        <div class="col-md-12">
                            <div class="block-container">
                                <a href="<?php echo site_url('/product-category/outdoor-lighting'); ?>">
                                    <div class="block-picture">
                                        <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/02/WVR9007EK_7.jpg">', wp_get_attachment_metadata(144260), 144260 ); ?>
                                    </div>
                                    <div class="block-caption-wrapper">
                                        <div class="block-caption-container">

                                            <h3 class="block-heading">Outdoor Lighting</h3>
                                            <h4 class="block-heading">Lighting your neighbors wish they had</h4>
                                            <a style="text-align: center;" href="<?php echo site_url('/product-category/outdoor-lighting'); ?>" class="block-shop-link">Shop Outdoor Lighting</a>
                                            
                                        </div>
                                    </div>
                                </a>
                           </div>
                        </div>

                   <?php endif; ?>

                   <div class="col-md-6">
                        <div class="block-container">
                            <a href="<?php echo site_url('/home/full-selection'); ?>">
                                <div class="block-picture">
                                    <img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2019/06/Kitchen-44167BK-Day.jpg">
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">

                                        <h3 class="block-heading">Full Selection</h3>
                                        <h4 class="block-heading">See all that we have to offer</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/home/full-selection'); ?>" class="block-shop-link">Shop Our Full Selection</a>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="block-container">
                            <a href="<?php echo site_url('/new-and-trending'); ?>">
                                <div class="block-picture">
                                    <img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2019/11/CTY542BN_5_home.jpg">
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">

                                        <h3 class="block-heading">New and Trending</h3>
                                        <h4 class="block-heading">The latest styles and more</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/new-and-trending'); ?>" class="block-shop-link">Shop New and Trending</a>

                                    </div>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                      <h2>Featured Designer Collections</h2>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="block-container">
                            <a href="<?php echo site_url('/product-category/generation-lighting/ellen-degeneres-collection'); ?>">
                                <div class="block-picture">
                                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/01/ED_EllenDeGeneres.jpg">', wp_get_attachment_metadata(116997), 116997 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">

                                        <h3 class="block-heading">ED By Ellen DeGeneres</h3>
                                        <a style="text-align: center;" href="<?php echo site_url('/product-category/generation-lighting/ellen-degeneres-collection'); ?>" class="block-shop-link">Shop ED Collection</a>

                                     </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="block-container">
                            <a href="<?php echo site_url('/product-category/generation-lighting/kelly-wearstler-collection'); ?>">
                                <div class="block-picture">
                                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/01/Kelly_KW.jpg">', wp_get_attachment_metadata(116998), 116998 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">

                                        <h3 class="block-heading">Kelly By Kelly Wearstler</h3>
                                        <a style="text-align: center;" href="<?php echo site_url('/product-category/generation-lighting/kelly-wearstler-collection'); ?>" class="block-shop-link">Shop Kelly Collection</a>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="block-container">
                            <a href="<?php echo site_url('/product-category/generation-lighting/thomas-obrien-collection'); ?>">
                                <div class="block-picture">
                                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/01/TOB_Portrait_credit-to-Michelle-Arcila.jpg">', wp_get_attachment_metadata(116999), 116999 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">

                                         <h3 class="block-heading">TOB by Thomas O'Brien</h3>
                                         <a style="text-align: center;" href="<?php echo site_url('/product-category/generation-lighting/thomas-obrien-collection'); ?>" class="block-shop-link">Shop TOB Collection</a>

                                     </div>
                                </div>
                             </a>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">
                        <div class="mb-5 mt-5">
                            <a class="button" href="<?php echo site_url('/designer-collections'); ?>">
                                See All Designer Collections
                            </a>
                        </div>
                    </div>

                </div>

            </div><!-- END ROW 2 -->

            <div class="row mt-5 lighting-ideas-home"><!-- ROW 3 -->

                <div class="col-md-4">

                     <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/04/Linara-Night-LI.jpg">', wp_get_attachment_metadata(163890), 163890 ); ?>

                </div>
                
                <!-- LIGHTING IDEAS -->
                <div class="col-md-4 p-3" style="background-color: #f6f6f6;">
                    
                    <div class="row h-100">

                        <div class="col-md-12 my-auto">

                            <div><h2>Lighting Ideas</h2></div>

                             <div class="mt-3">
                                <p>Love a chandelier, but can't find a pendant that matches it? Love a certain style, but don't know where to start? Look no further! Our Lighting Ideas section has products from all lighting categories across the most recent and popular styles. Whether you're looking for inspiration, or just want to find matching fixtures - Lighting Ideas is a great place to get started!</p>
                            </div>

                            <div class="mt-3"><a href="<?php echo site_url('/home/lighting-ideas'); ?>" class="lw-showroom-nav-button">Get Inspired</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 desktop-only">
                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/04/Dining-Room-Laurent-52052CG-Detail-Day-1B-scaled.jpg">', wp_get_attachment_metadata(163892), 163892 ); ?>
                </div>

            </div><!-- END ROW 3-->

            <div class="row mt-5"><!-- ROW 4 -->

                <div class="col-md-12 mb-3 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                    <h2>Inspiration</h2>
                </div>

                <?php get_recent_post_data(); ?>

                <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">

                    <div class="mb-5 mt-5">

                        <a class="button" href="<?php echo site_url('/lightworld-blog'); ?>">See All Inspiration</a>
                    
                    </div>
                </div>

            </div><!-- END ROW 4-->

            <!-- WHY SHOP WITH US --><!-- ROW 5 -->
            <div class="row mt-5 mb-5" style="text-align: center; border: 2px solid #000;">

                <div class="col-md-12 mt-3 mb-3"><h2>Why Shop with Us Online?</h2></div>

                    <div class="col-md-3 mt-3">
                       <i class="fa fa-users"></i>
                       <h4 class="single-product__icon_text">Family Owned Since 1989</h4>
                       <br>
                       <p>For over 30 years, one of Light World’s traditions is treating its customers and employees like family! Not happy with your order? Let’s fix it! Need advice? Contact us! Lightyourhome.com was founded on these values and we’re with you every step of the way.</p>
                   </div>

                   <div class="col-md-3 mt-3">
                       <i class="fa fa-usd"></i>
                       <h4 class="single-product__icon_text">You Save Money</h4>
                       <br>
                       <p>Not only do we guarantee the lowest prices, we also include free shipping with every order - no questions asked! Shopping with us means more money towards your project or having a night out with the family.</p>
                   </div>

                   <div class="col-md-3 mt-3">
                       <i class="fa fa-check"></i>
                       <h4 class="single-product__icon_text">Hand-Picked Selection</h4>
                       <br>
                       <p>After being in business for over 30 years, we realized it can take time to find that perfect fixture – so we did it for you! Every fixture on lightyourhome.com is guaranteed hand-picked by our staff for their timeless styles, quality and eye-catching looks.</p>
                   </div>

                   <div class="col-md-3 mt-3">
                       <i class="fa fa-shopping-cart"></i>
                       <h4 class="single-product__icon_text">First Return Free</h4>
                       <br>
                       <p>If you’re not satisfied with your first order from us for any reason, you can return it for free! No restocking or shipping fees.</p>
                       <br>
                       <p><strong>This offer applies to orders on lightyourhome.com only.</strong></p>
                   </div>

                </div>

            </div>

        </main>
        <!-- #main -->

    </div><!-- #primary -->

</div>
<!-- #content -->

</div>
<!-- Wrapper end -->

<div class="container-fluid home-hero-desc">

  <div class="mobile-only">

      <div class="container-fluid px-0">
          <div class="row">

                  <img id="home-image" src="<?php echo site_url('/wp-content/uploads/2019/11/home_showroom_img_mobile_1.jpg'); ?>">

              <div class="col-md-12" style="background-color: #f6f6f6; text-align: center;">
                  <div class="home-hero-desc">
                      <h3>Our Showroom</h3>
                      <p>Free candy, a huge selection, and a team of experts ready to help! What more could you ask for?</p>
                      <a class="button mb-3" href="<?php echo site_url('/home/light-world-showroom'); ?>">Learn More</a>
                  </div>
              </div>
          </div>
      </div>

  </div>

  <div class="desktop-only">

    <div class="row mt-5 mb-5 px-3" style="text-align: center;">

        <div class="col-md-12">
        <?php echo do_shortcode('[rev_slider alias="home_black_friday_golden_11-19-19-11"][/rev_slider]'); ?>
        </div>

    </div>

  </div>

    <!-- ACCORDION  -->
    <div class="row justify-content-center mt-5" style="background-color: #f6f6f6;">

        <div class="col-md-6 p-4">

            For over 30 years, Light World has been focused on refining the indoor and outdoor lighting shopping experience for our customers. Whether you’re looking for practical and attractive light fixtures or inspiring and artistic lighting, we have lighting for every room in your house in our showroom. From rustic farm style light fixtures to modern industrial lighting, our family of experienced professionals is here to help you find the decorative light fixtures you need to bring your home’s look together.
            <br>
            <br> Visit our showroom in Feasterville-Trevose, Pennsylvania or give us a call at <a href="tel:2158838544">(215) 8838544</a> to find out more about our wide selection of <a class="home-accordion-links" href="product-category/ceiling-fans">ceiling fans</a>, chandeliers, <a class="home-accordion-links" href="product-category/ceiling-lights">ceiling lights<a/>, table lamps, <a class="home-accordion-links" href="product-category/floor-lamps">floor lamps</a>, and <a class="home-accordion-links" href="product-category/outdoor-lighting">outdoor lighting<a/>.  We’re conveniently located just minutes from Bucks County communities like Southampton, PA!
                      <br>
					  <br>
                      <div id="accordion-hidden-content"><h1><strong>Largest Lighting Store in Feasterville-Trevose</strong></h1>
                      <br>
                      If you’re looking for any type of lighting for your home, look no further than Light World!  As the largest lighting store in Feasterville-Trevose, our selection includes light fixtures and kitchen lighting you won’t find in your favorite home store.  We specialize in lighting and nothing else; that’s why we stock a wide variety of light fixtures from modern rustic farmhouse lighting and rustic kitchen lighting to industrial lighting and everything in between.  In our showroom, you’ll see the                       farm style light fixtures, kitchen lighting, and contemporary farmhouse lighting your local home store doesn’t have room to stock.
                      <br>
                      <br>
                      Our Feasterville-Trevose lighting store is conveniently located near Southampton, PA and other Bucks County communities, so stop in and see us for all your kitchen lighting, farmhouse lighting, and industrial lighting needs!
                      <br>
                      <br>
                      <h2><strong>Farmhouse Lighting</strong></h2>
                      <br>
                      These days, the rustic aesthetic is more popular than ever.  The look of modern farmhouse light fixtures can add a sense of warmth and intimacy to your home and your investment in contemporary farmhouse lighting is a sure way to add value to your home.  Guests and potential home buyers will absolutely swoon when they see the cute, rustic kitchen lighting and farm style light fixtures you picked up at Light World!
                      <br>
                      <br>
                      Don’t double down on your home’s dated look; make some cost effective upgrades by installing trendy farmhouse lighting or rustic kitchen lighting from Light World!
                      <br>
                      <br>
                      <h2><strong>Lighting Store in Southampton, PA</strong></h2>
                      <br>
                      Bucks County communities like Southampton, PA are known for their quaint, older homes.  Unfortunately, many of them have been remodeled using standard home store lighting that does nothing to enhance the rustic charm of these buildings, some of which are over 100 years old.  Instead of installing lighting that doesn’t fit your home’s personality, visit the largest lighting store in Feasterville-Trevose and pick up some modern farmhouse light fixtures or industrial lighting that will really                       complement your interior and exterior spaces.  Whether you live in Southampton, PA or any surrounding Bucks County location, Light World is just minutes away!  Our lighting store showroom is always packed with all the latest in modern rustic farmhouse lighting, including kitchen lighting, bathroom lighting, <a class="home-accordion-links" href="product-category/table-lamps">table lamps</a>, ceiling fans, <a class="home-accordion-links" href="product-category/chandeliers">chandeliers</a>, and more.
        </div>
        <br>
        <a href="javascript:void(0)" id="accordion-read-more">Read More</a>

    </div>

</div>

</div>
<!-- end container-fluid -->

<?php get_footer(); ?>
