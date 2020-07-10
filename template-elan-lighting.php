<?php /* Template Name: Elan Lighting */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">

           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/elan_lighting_brand_img.jpg">
              </div>
			</div>

        <div class="col-lg-4 col-12 title-container">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text" style="padding: 10px;">
                        <h2 class="prod-cat-title">Élan Lighting</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="wrapper" id="sale-page-wrapper">

    <div id="content" class="container">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

                <div class="row mb-4 mt-4">

                    <div class="col-sm-12 mb-5 pb-2" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Élan Lighting Categories</h2>
                    </div>

                    <div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/elan-lighting/elan-chandeliers'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/84205_v2.jpg">', wp_get_attachment_metadata(106883), 106883 ); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Chandeliers</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/elan-lighting/elan-pendants'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/84138.jpg">', wp_get_attachment_metadata(108759), 108759 ); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Pendants</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/elan-lighting/elan-bath-and-vanity'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/85093MBK-scaled.jpg">', wp_get_attachment_metadata(109082), 109082 ); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Bath and Vanity</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/elan-lighting/elan-semi-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/83227.jpg">', wp_get_attachment_metadata(109205), 109205 ); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Semi Flush Mounts</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/elan-lighting/elan-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/83410_Angle.jpg">', wp_get_attachment_metadata(109226), 109226 ); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Flush Mounts</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6  mt-5">

                                  <a href="<?php echo site_url('/product-category/elan-lighting/elan-sconces'); ?>">
                                      <div class="brand-page_cat_image_container pt-3">
                                          <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/83829.jpg">', wp_get_attachment_metadata(110054), 110054 ); ?>
                                          <div class="pb-3 pt-3">
                                              <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Sconces</h3>
                                          </div>
                                      </div>
                                  </a>

                              </div>

                    <div class="col-md-12 mt-5 button-container" style="text-align: center;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/elan-lighting'); ?>">
                                <button class="button">Shop All Élan Lighting</button>
                            </a>
                        </div>
                    </div>

                   <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Élan Lighting Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="elan-lighting" ]'); ?>
                    </div>

                    <div class="col-md-12 mt-3" style="border-top: 2px solid #d3d3d3;"></div>

                </div>
                <!-- end Row one -->

            </main>
            <!-- end main -->

        </div>
        <!-- end primary -->

    </div>
    <!-- end container -->

</div>
<!-- end wrapper -->

<?php get_footer(); ?>
