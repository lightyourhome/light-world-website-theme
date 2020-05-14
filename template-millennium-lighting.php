<?php /* Template Name: Millennium Lighting */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">

           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/11/RDBS10-SB-Island-scaled-e1574456657498.jpg">
              </div>
			</div>

        <div class="col-lg-4 col-12" style="background-color: #fbfbfb;">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text" style="background-color: #fbfbfb;  padding: 10px;">
                        <h2 class="prod-cat-title">Millennium Lighting</h2>
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
                        <h2>Millennium Lighting Categories</h2>
                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/millennium-lighting/millennium-lighting-chandeliers'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/3505-MB-BN.jpg">', wp_get_attachment_metadata(29784), 29784 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Chandeliers</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/millennium-lighting/millennium-lighting-bath'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/3443-HBZ.jpg">', wp_get_attachment_metadata(51350), 51350 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Bath and Vanity Lighting</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/millennium-lighting/millennium-lighting-sconces'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/171-HBZ.jpg">', wp_get_attachment_metadata(7382), 7382 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Sconces</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/millennium-lighting'); ?>">
                                <button class="button">Shop All Millennium Lighting</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Millennium Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="millennium-lighting" ]'); ?>
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
