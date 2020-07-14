<?php /* Template Name: Livex Lighting */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">

           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="<?php echo site_url('/wp-content/uploads/2019/11/43204-91_B2-1.jpg'); ?>">
              </div>
			</div>

        <div class="col-lg-4 col-12 title-container">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text" style="padding: 10px;">
                        <h2 class="prod-cat-title">Livex Lighting</h2>
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
                        <h2>Livex Lighting Categories</h2>
                    </div>

                    <div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/livex-lighting/livex-chandeliers'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/49629-04_01.jpg">', wp_get_attachment_metadata(64104), 64104 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Chandeliers</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/livex-lighting/livex-bath-and-vanity-lighting'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: 80%; width: 100%;" src="/wp-content/uploads/2019/12/1354-02_T.jpg">', wp_get_attachment_metadata(95937), 95937 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Bath and Vanity Lighting</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/livex-lighting/livex-pendant-lighting'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/46212-04_14.jpg">', wp_get_attachment_metadata(62769), 62769 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Pendant Lighting</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/livex-lighting/livex-lighting-semi-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2018/12/072-41108-33.jpg">', wp_get_attachment_metadata(7599), 7599 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Semi Flush Mount Lighting</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-12 mt-5 button-container" style="text-align: center;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/livex-lighting'); ?>">
                                <button class="button">Shop All Livex Lighting</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Livex Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="livex-lighting" ]'); ?>
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
