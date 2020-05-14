<?php /* Template Name: Artcraft Lighting */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">

           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/03/artcraft_lighting.jpg">
              </div>
			</div>

        <div class="col-lg-4 col-12" style="background-color: #fbfbfb;">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text" style="background-color: #fbfbfb;  padding: 10px;">
                        <h2 class="prod-cat-title">Artcraft Lighting</h2>
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
                        <h2>Artcraft Lighting Categories</h2>
                    </div>

                    <div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/artcraft-lighting/artcraft-chandeliers'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/03/AC11156.jpg">', wp_get_attachment_metadata(63189), 63189 ); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Chandeliers</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/artcraft-lighting/artcraft-pendants'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/03/CL15090.jpg">', wp_get_attachment_metadata(163362), 163362 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Pendants</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/artcraft-lighting/artcraft-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/03/AC11113.jpg">', wp_get_attachment_metadata(163423), 163423 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Flush Mounts</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/artcraft-lighting/artcraft-semi-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/03/CL15112.jpg">', wp_get_attachment_metadata(163470), 163470 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Semi Flush Mounts</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                                  <a href="<?php echo site_url('/product-category/artcraft-lighting/artcraft-sconces'); ?>">
                                      <div class="brand-page_cat_image_container pt-3">
                                          <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/03/AC603CO.jpg">', wp_get_attachment_metadata(163569), 163569 ); ?>
                           <div class="pb-3 pt-3">
                                              <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Sconces</h3>
                                          </div>
                                      </div>
                                  </a>

                              </div>


                    <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/artcraft-lighting'); ?>">
                                <button class="button">Shop All Artcraft Lighting</button>
                            </a>
                        </div>
                    </div>

                   <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Artcraft Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="artcraft-lighting" ]'); ?>
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
