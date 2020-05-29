<?php /* Template Name: Sale Page ET2 Maxim Update */ ?>

<?php get_header(); ?>

<div class="mobile-only">

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <img id="home-image" src="<?php echo site_url('/wp-content/uploads/2019/11/black_friday_sale-slider-mobile.jpg'); ?>">
            </div>
            <div class="col-md-12" style="background-color: #f6f6f6; text-align: center;">
                <div class="home-hero-desc">
                    <h3>Sales and Promotions</h3>
                    <p>Save on Chandeliers, Pendants and More!</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="desktop-only">

  <a href="https://www.lightyourhome.com/home/sales-and-promotions/"><?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/03/spring_sale_banner_updated_2.jpg">', wp_get_attachment_metadata(163810), 163810 ); ?></a>

</div>

<div class="wrapper" id="sale-page-wrapper">

    <div id="content" class="container-fluid">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

                <div class="row mb-4 mt-4">

                    <div style="border-bottom: 2px solid #d3d3d3;" class="col-md-12 mt-3 mb-3">
                        <h1>Our Featured Sales</h1>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php echo site_url('/product-category/quoizel-lighting/quoizel-outdoor/'); ?>">
                                <div class="block-picture">
                                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/04/TNC5006WT_4_.jpg">', wp_get_attachment_metadata(16796), 16796 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">Quoizel Lighting</h4>
                                        <h3 class="block-heading">Save 10% on Quoizel Outdoor Lighting</h3>
                                        <h4 class="block-heading">Use Code "OUTDOOR10" at checkout!</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/product-category/quoizel-lighting/quoizel-outdoor/'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                            </a>
                         </div>
                     </div>

                     <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php echo site_url('/product-category/innovations-lighting/innovations-chandeliers/'); ?>">
                                <div class="block-picture">
                                     <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/09/516-3I-BK-G121-8RB-2.jpg">', wp_get_attachment_metadata(38393), 38393 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">Innovations Lighting Chandeliers</h4>
                                        <h3 class="block-heading">Save 20% on Innovations Chandeliers</h3>
                                        <h4 class="block-heading">Prices already discounted!</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/product-category/innovations-lighting/innovations-chandeliers/'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                            </a>
                         </div>
                     </div>

                     <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php echo site_url('/product-category/innovations-lighting/innovations-pendants/'); ?>">
                                <div class="block-picture">
                                     <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/08/200C-AB.jpg">', wp_get_attachment_metadata(31214), 31214 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">Innovations Lighting Pendants</h4>
                                        <h3 class="block-heading">Save 20% on All Innovations Pendants</h3>
                                        <h4 class="block-heading">Prices already discounted!</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/product-category/innovations-lighting/innovations-pendants/'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                            </a>
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
                                        <h3 class="block-heading">Save 15% on All Maxim Lighting</h3>
                                        <h4 class="block-heading">Prices already discounted!</h4>
                                        <a style="text-align: center;" href="<?php //echo site_url('/brands/maxim-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                            </a>
                         </div>
                     </div> -->

                     <!-- <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php //echo site_url('/brands/et2-lighting'); ?>">
                                <div class="block-picture">
                                     <?php //echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/04/E25064-92BKGLD-scaled.jpg">', wp_get_attachment_metadata(165986), 165986 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">ET2 Lighting</h4>
                                        <h3 class="block-heading">Save 15% on All ET2 Lighting</h3>
                                        <h4 class="block-heading">Prices already discounted!</h4>
                                        <a style="text-align: center;" href="<?php //echo site_url('/brands/et2-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                            </a>
                         </div>
                     </div> -->

                     <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php echo site_url('/brands/elk-home'); ?>">
                                <div class="block-picture">
                                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/d2688.jpg">', wp_get_attachment_metadata(57912), 57912 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">Elk Home</h4>
                                        <h3 class="block-heading">Save 15% off all Elk Home</h3>
                                        <h4 class="block-heading">Use code "ELK15" at checkout!</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/brands/elk-home'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                             </a>
                        </div>
                     </div>

                     <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php echo site_url('/brands/elk-lighting'); ?>">
                                <div class="block-picture">
                                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/05/89047_8.jpg">', wp_get_attachment_metadata(166726), 166726 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">Elk Lighting</h4>
                                        <h3 class="block-heading">Save 15% off all Elk Lighting</h3>
                                        <h4 class="block-heading">Use code "ELKLIGHTING15" at checkout!</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/brands/elk-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>
                                </div>
                             </a>
                        </div>
                     </div>

                     <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php echo site_url('/brands/mitzi-lighting'); ?>">
                                <div class="block-picture">
                                  <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2018/12/mitzi_Arden_1.jpg">', wp_get_attachment_metadata(7356), 7356 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h4 class="block-heading">Mitzi Lighting</h4>
                                        <h3 class="block-heading">Save 20% off all Mitzi Lighting</h3>
                                        <h4 class="block-heading">Prices already discounted!</h4>
                                        <a style="text-align: center;" href="<?php echo site_url('/brands/mitzi-lighting'); ?>" class="block-shop-link">Shop Now</a>
                                    </div>                                   
                                </div>
                            </a>
                         </div>
                     </div>

                     <div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php echo site_url('/brands/hudson-valley-lighting'); ?>">
                                <div class="block-picture">
                                     <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/07/5800-AGB_800.jpg">', wp_get_attachment_metadata(27793), 27793 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                    <h4 class="block-heading">Hudson Valley</h4>
                                    <h3 class="block-heading">Save 20% off all Hudson Valley Lighting</h3>
                                    <h4 class="block-heading">Prices already discounted!</h4>
                                    <a style="text-align: center;" href="<?php echo site_url('/brands/hudson-valley-lighting'); ?>" class="block-shop-link">Shop Now</a>                                    </div>
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
