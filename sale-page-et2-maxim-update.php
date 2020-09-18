<?php /* Template Name: Sale Page ET2 Maxim Update */ ?>

<?php get_header(); ?>

<div class="mobile-only">

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo site_url('/home/sales-and-promotions/'); ?>"><?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/09/1.fall_sale_640x800.jpg">', wp_get_attachment_metadata(176774), 176774 ); ?></a>
            </div>
        </div>
    </div>

</div>

<div class="desktop-only">

  <a id="sales-page-banner"><?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://lightyourhome.com/wp-content/uploads/2020/09/1.Fall-Sale_1920x600.jpg">', wp_get_attachment_metadata(176777), 176777 ); ?></a>

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
                                <a href="<?php echo site_url('/brands/quoizel-lighting/'); ?>">
                                    <div class="block-picture">
                                        <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/04/LWN5005BN_4_.jpg">', wp_get_attachment_metadata(15942), 15942 ); ?>
                                    </div>
                                    <div class="block-caption-wrapper">
                                        <div class="block-caption-container">
                                            <h4 class="block-heading">Quoizel Lighting</h4>
                                            <h3 class="block-heading">Get 10% off on All of Quoizel Lighting</h3>
                                            <h4 class="block-heading">Use code "QUOIZELALL10" at checkout!</h4>
                                            <a style="text-align: center;" href="<?php echo site_url('/brands/quoizel-lighting/'); ?>" class="block-shop-link">Shop Now</a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- <div class="col-md-4">

                        <div class="block-container">
                            <a href="<?php //echo site_url('/brands/elk-home'); ?>">
                                <div class="block-picture">
                                    <?php //echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/07/elk_home_sale_august.jpg">', wp_get_attachment_metadata(172838), 172838 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">Elk Home</h4>
                                        <h3 class="block-heading">Save 15% on all Elk Home Products</h3>
                                        <h4 class="block-heading">Use code ELKHOME15 at checkout!</h4>
                                        <a style="text-align: center;" href="<?php //echo site_url('/brands/elk-home'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                             </a>
                        </div>

                    </div> -->

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
                                            <h4 class="block-heading">Use code "ELKLIGHTING15" at checkout!</h4>
                                            <a style="text-align: center;" href="<?php echo site_url('/brands/elk-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php //echo site_url('/brands/maxim-lighting'); ?>">
                                <div class="block-picture">
                                     <?php //echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/04/31213OIAB-scaled.jpg">', wp_get_attachment_metadata(165335), 165335 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">Maxim Lighting</h4>
                                        <h3 class="block-heading">Save 10% on All Maxim Lighting 2019-2020 Releases</h3>
                                        <h4 class="block-heading">Prices already discounted!</h4>
                                        <a style="text-align: center;" href="<?php //echo site_url('/brands/maxim-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                            </a>
                         </div>
                    </div> -->

                     <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php echo site_url('/brands/et2-lighting'); ?>">
                                <div class="block-picture">
                                     <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/04/E25064-92BKGLD-scaled.jpg">', wp_get_attachment_metadata(165986), 165986 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">ET2 Lighting</h4>
                                        <h3 class="block-heading">Save 10% on All ET2 Lighting 2019-2020 Releases</h3>
                                        <h4 class="block-heading">Prices already discounted!</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/brands/et2-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                            </a>
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
