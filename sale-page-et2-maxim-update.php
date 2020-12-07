<?php /* Template Name: Sale Page ET2 Maxim Update */ ?>

<?php get_header(); ?>

<div class="mobile-only">

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <a class="sales-page-banner"><?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/12/winter_sale_mobile_01.jpg">', wp_get_attachment_metadata(190677), 190677 ); ?></a>
            </div>
        </div>
    </div>

</div>

<div class="desktop-only">

  <a class="sales-page-banner"><?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/12/wintersale_2020_2.jpg">', wp_get_attachment_metadata(190674), 190674 ); ?></a>

</div>

<div class="wrapper" id="sale-page-wrapper">

    <div id="content" class="container-fluid">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

                <div class="row mb-4 mt-4">

                    <div id="sales-page-featured-sales" style="border-bottom: 2px solid #d3d3d3;" class="col-md-12 mt-3 mb-3">
                        <h1>Our Featured Sales</h1>
                    </div>

                    <div class="col-md-4">

                        <div class="block-picture-primary-container">

                            <div class="block-container">
                                <a href="<?php echo site_url('/brands/elk-home'); ?>">
                                    <div class="block-picture">
                                        <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/07/elk_home_sale_august.jpg">', wp_get_attachment_metadata(172838), 172838 ); ?>
                                    </div>
                                    <div class="block-caption-wrapper">
                                        <div class="block-caption-container">
                                            <h4 class="block-heading">Elk Home</h4>
                                            <h3 class="block-heading">Save 15% on all Elk Home Products</h3>
                                            <h4 class="block-heading">Use coupon "ELKHOME15" at checkout!</h4>
                                            <a style="text-align: center;" href="<?php echo site_url('/brands/elk-home'); ?>" class="block-shop-link">Shop Now</a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="block-picture-primary-container">

                            <div class="block-container">
                                <a href="<?php echo site_url('/brands/elk-lighting'); ?>">
                                    <div class="block-picture">
                                        <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/05/89047_8.jpg">', wp_get_attachment_metadata(166726), 166726 ); ?>
                                    </div>
                                    <div class="block-caption-wrapper">
                                        <div class="block-caption-container">
                                            <h4 class="block-heading">Elk Lighting</h4>
                                            <h3 class="block-heading">Get 15% off on All Elk Lighting</h3>
                                            <h4 class="block-heading">Use coupon "ELKLIGHTING15" at checkout!</h4>
                                            <a style="text-align: center;" href="<?php echo site_url('/brands/elk-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="block-picture-primary-container">

                            <div class="block-container">
                                <a href="<?php echo site_url('/brands/maxim-lighting'); ?>">
                                    <div class="block-picture">
                                        <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/04/11375BKAB-scaled.jpg">', wp_get_attachment_metadata(164738), 164738 ); ?>
                                    </div>
                                    <div class="block-caption-wrapper">
                                        <div class="block-caption-container">
                                            <h4 class="block-heading">Maxim Lighting</h4>
                                            <h3 class="block-heading">Get 20% off on All Maxim Lighting</h3>
                                            <h4 class="block-heading">Prices already discounted!</h4>
                                            <a style="text-align: center;" href="<?php echo site_url('/brands/maxim-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="block-picture-primary-container">

                            <div class="block-container">
                                <a href="<?php echo site_url('/brands/et2-lighting'); ?>">
                                    <div class="block-picture">
                                        <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/04/E25118-92BKGLD-scaled.jpg">', wp_get_attachment_metadata(165861), 165861 ); ?>
                                    </div>
                                    <div class="block-caption-wrapper">
                                        <div class="block-caption-container">
                                            <h4 class="block-heading">ET2 Lighting</h4>
                                            <h3 class="block-heading">Get 20% off on All ET2 Lighting</h3>
                                            <h4 class="block-heading">Prices already discounted!</h4>
                                            <a style="text-align: center;" href="<?php echo site_url('/brands/et2-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-12" style="border-top: 2px solid #d3d3d3;"></div>

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
