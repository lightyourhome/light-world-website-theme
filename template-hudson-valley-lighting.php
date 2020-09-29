<?php /* Template Name: Hudson Valley Lighting */ ?>

<?php get_header(); ?>

<div class="container mt-2">
    <div class="row justify-content-center">

           <div id="brand-page_heading_image" class="col-md-8">
			  <div class="prod_cat_img">
                <img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/11/hudson_valley_cat_image_2-e1574348700630.jpg">
              </div>
			</div>

        <div class="col-lg-4 col-12 title-container">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-12 col-12 my-auto">
                    <div class="prod_cat_text" style="padding: 10px;">
                        <h2 class="prod-cat-title">Hudson Valley Lighting</h2>
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
                        <h2>Hudson Valley Lighting Categories</h2>
                    </div>

                    <?php

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Chandeliers',
                            'img_src' => '/wp-content/uploads/2020/09/5708-GL_WH-1.png',
                            'img_id'  => 176958,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-chandeliers/' )

                        ) );

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Pendants',
                            'img_src' => '/wp-content/uploads/2020/09/BKO303-PN_BK.png',
                            'img_id'  => 177240,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-pendants/' )

                        ) );

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Bath and Vanity',
                            'img_src' => '/wp-content/uploads/2020/09/9204-PN.png',
                            'img_id'  => 177734,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-bath-and-vanity/' )

                        ) );

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Sconces',
                            'img_src' => '/wp-content/uploads/2020/09/6821-OB.png',
                            'img_id'  => 177640,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-sconces/' )

                        ) );

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Swing Arm Sconces',
                            'img_src' => '/wp-content/uploads/2020/09/5331-AGB.png',
                            'img_id'  => 177709,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-sconces/hudson-valley-swing-arm-sconces/' )

                        ) );

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Floor Lamps',
                            'img_src' => '/wp-content/uploads/2019/05/L1346-AGB.jpg',
                            'img_id'  => 23766,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-floor-lamps' )

                        ) );

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Table Lamps',
                            'img_src' => '/wp-content/uploads/2019/05/L942-PN_800.jpg',
                            'img_id'  => 23938,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-table-lamps' )

                        ) );

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Flush Mounts',
                            'img_src' => '/wp-content/uploads/2019/07/6416-AGB_800.jpg',
                            'img_id'  => 27804,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-flush-mounts' )

                        ) );

                        brand_page_picture_blocks( array(

                            'classes' => 'col-sm-4 col-6 mt-5',
                            'title'   => 'Semi Flush Mounts',
                            'img_src' => '/wp-content/uploads/2019/07/5800-PN_800.jpg',
                            'img_id'  => 27795,
                            'url'     => site_url( '/product-category/hudson-valley-lighting/hudson-valley-semi-flush-mounts' )

                        ) );

                    ?>

                    <div class="col-md-12 mt-5 button-container" style="text-align: center;">
                        <div class="mb-5 mt-5">
                            <a href="<?php echo site_url('/product-category/hudson-valley-lighting'); ?>">
                                <button class="button">Shop All Hudson Valley Lighting</button>
                            </a>
                        </div>
                    </div>

                   <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Popular Hudson Valley Products</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="hudson-valley-lighting" ]'); ?>
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
