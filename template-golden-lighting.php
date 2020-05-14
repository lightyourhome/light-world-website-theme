<?php /* Template Name: Golden Lighting */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">

           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/08/golden_lighting_labor_day_sale-1-e1570045110231.jpg">
              </div>
			</div>

        <div class="col-lg-4 col-12" style="background-color: #fbfbfb;">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text" style="background-color: #fbfbfb;  padding: 10px;">
                        <h2 class="prod-cat-title">Golden Lighting</h2>
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
                        <h2>Golden Lighting Categories</h2>
                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/golden-lighting/golden-lighting-bath-and-vanity'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/9808-BA3-BLK-2.jpg">', wp_get_attachment_metadata(43978), 43978); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Bath and Vanity</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/golden-lighting/golden-lighting-chandeliers'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/07/8330-4-BLK_2.jpg">', wp_get_attachment_metadata(23831), 23831 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Chandeliers</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/golden-lighting/golden-lighting-pendants'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/3218-L-BLK-BLK-2.jpg">', wp_get_attachment_metadata(48234), 48234 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Pendants</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/golden-lighting/golden-lighting-semi-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/07/1048-SF-GMT_2.jpg">', wp_get_attachment_metadata(28071), 28071 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Semi Flush Mounts</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/golden-lighting/golden-lighting-flush-mounts'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/07/1998-FM-EBB_2.jpg">', wp_get_attachment_metadata(28106), 28106 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Flush Mounts</h3>
                                </div>
                            </div>
                        </a>

                    </div>

					<div class="col-sm-4 col-6  mt-5">

                        <a href="<?php echo site_url('/product-category/golden-lighting/golden-lighting-sconces'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2018/12/GO-1771-WSC-PG-PRL.jpg">', wp_get_attachment_metadata(7370), 7370 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Sconces</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/golden-lighting'); ?>">
                                <button class="button">Shop All Golden Lighting</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Golden Lighting Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="golden-lighting" ]'); ?>
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
