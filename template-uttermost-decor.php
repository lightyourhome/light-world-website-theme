<?php /* Template Name: Uttermost Decor */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">

           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/12/uttermost_brand_header_img-1.jpg">
              </div>
			</div>

        <div class="col-lg-4 col-12" style="background-color: #fbfbfb;">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text" style="background-color: #fbfbfb;  padding: 10px;">
                        <h2 class="prod-cat-title">Uttermost Lighting and Decor</h2>
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
                        <h2>Uttermost Categories</h2>
                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/uttermost-lighting-and-decor/uttermost-art-and-decor'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/01/216-33677_2_-1.jpg">', wp_get_attachment_metadata(9256), 9256); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Art and Decor</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/uttermost-lighting-and-decor/uttermost-table-lamps'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2018/12/27788-1_2_.jpg">', wp_get_attachment_metadata(7348), 7348 ); ?>
								 <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Table Lamps</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/uttermost-lighting-and-decor'); ?>">
                                <button class="button">Shop All Uttermost</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Uttermost Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="uttermost-lighting-and-decor" ]'); ?>
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
