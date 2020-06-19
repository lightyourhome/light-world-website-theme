<?php /* Template Name: Table Lamps */ ?>

<?php get_header(); ?>

<!-- mobile hero scene -->
<div class="mobile-only">

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/06/lamps_banner_mobile.jpg">', wp_get_attachment_metadata(172688), 172688 ); ?>
            </div>
        </div>
    </div>

</div>

<!-- desktop/tablet slider -->
<div class="desktop-only">

    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/06/lamps_banner.jpg">', wp_get_attachment_metadata(172683), 172683 ); ?>

</div>

<div class="wrapper" id="sale-page-wrapper">

    <div id="content" class="container">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

                <div class="row justify-content-center mt-5">

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/lamps/table-lamps'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/FS-CT1021BBS1-scaled.jpg">', wp_get_attachment_metadata(115705), 115705 ); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Table Lamps</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-4 col-6 mt-5">

                        <a href="<?php echo site_url('/product-category/lamps/floor-lamps'); ?>">
                            <div class="brand-page_cat_image_container pt-3">
                                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/05/L1189-PN.jpg">', wp_get_attachment_metadata(23749), 23749 ); ?>
                                <div class="pb-3 pt-3">
                                    <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Floor Lamps</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">

                        <div class="mb-5 mt-5">

                            <a class="button" href="<?php echo site_url('/product-category/lamps'); ?>">Shop All Lamps</a>

                        </div>

                    </div>

                    <!-- BEST SELLERS -->
                    <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Best Selling Wall Lights</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="4" columns="4" best_selling="true" category="table-lamps" ]'); ?>
                    </div>

                    <div class="col-md-12 mb-3 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Lighting Inspiration</h2>
                    </div>

                    <?php get_recent_post_data(); ?>

                    <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">

                        <div class="mb-5 mt-5">

                            <a class="button" href="<?php echo site_url('/lightworld-blog'); ?>">See All Inspiration</a>

                        </div>

                    </div>

                </div>

            </main>

        </div>

    </div>

</div>

<!-- <div id="accordion-container" class="row justify-content-center mt-5" style="background-color: #f6f6f6;">

    <div class="col-md-8 p-4">

        <div id="accordion-hidden-content">

        </div>

        <a href="javascript:void(0)" id="accordion-read-more">Read More</a>

    </div>

</div> -->

<?php get_footer(); ?>