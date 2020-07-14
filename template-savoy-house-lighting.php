<?php /* Template Name: Savoy House Lighting */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">

           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/11/savoy_house-scaled-e1574455820277.jpg">
              </div>
			</div>

        <div class="col-lg-4 col-12 title-container">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text title-container" style=" padding: 10px;">
                        <h2 class="prod-cat-title">Savoy House Lighting</h2>
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
                        <h2>Savoy House Lighting Categories</h2>
                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/savoy-house-lighting/savoy-house-chandeliers'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/7-6099-24-109_2.jpg">', wp_get_attachment_metadata(53694), 53694 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Chandeliers</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/savoy-house-lighting/savoy-house-bath'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/8-1020-2-BK.jpg">', wp_get_attachment_metadata(53807), 53807 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Bath and Vanity Lighting</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/savoy-house-lighting/savoy-house-sconces'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/9-575-1-13.jpg">', wp_get_attachment_metadata(54529), 54529 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Sconces</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/savoy-house-lighting/savoy-house-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/07/6-2182-16-322_E.jpg">', wp_get_attachment_metadata(27912), 27912 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Flush Mounts</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/savoy-house-lighting/savoy-house-semi-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/07/6-2232-4-51_C.jpg">', wp_get_attachment_metadata(27924), 27924 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Semi Flush Mounts</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-12 mt-5 button-container" style="text-align: center;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/savoy-house-lighting'); ?>">
                                <button class="button">Shop All Savoy House Lighting</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Savoy House Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="savoy-house-lighting" ]'); ?>
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
