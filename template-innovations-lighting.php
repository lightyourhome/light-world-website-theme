<?php /* Template Name: Innovations Lighting */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">
           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/08/innovations_labor_day_sale-e1573765649189.jpg">
              </div>
			</div>
        <div class="col-lg-4 col-12" style="background-color: #fbfbfb;">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text" style="background-color: #fbfbfb;  padding: 10px;">
                        <h2 class="prod-cat-title">Innovations Lighting</h2>
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
                        <h2>Innovations Lighting Categories</h2>
                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/innovations-lighting/innovations-chandeliers'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/09/516-4I-PC-G121-8RB.jpg">', wp_get_attachment_metadata(38538), 38538 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Chandeliers</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/innovations-lighting/innovations-bath-and-vanity'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/08/516-4W-PC-G116.jpg">', wp_get_attachment_metadata(32158), 32158 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Bath and Vanity Lighting</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/innovations-lighting/innovations-pendants'); ?>">
                            <div class="brand-page_cat_image_container">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/08/284-1S-SN-M13-SN.jpg">', wp_get_attachment_metadata(31310), 31310 ); ?>
                                <div class="pb-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="">Pendant Lighting</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/innovations-lighting'); ?>">
                                <button class="button">Shop All Innovations Lighting</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Innovations Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="innovations-lighting" ]'); ?>
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
