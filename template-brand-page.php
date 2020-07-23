<?php /* Template Name: Brands */ ?>

<?php get_header(); ?>

<div class="wrapper" id="sale-page-wrapper">

    <div id="content" class="container-fluid">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

				<div class="row justify-content-center title-container">
                   <div class="col-md-12 col-12 mt-3 mb-3">
                    <div class="prod_cat_text">
                      <h1 class="prod-cat-title">Brands</h1>
                      </div>
                     </div>
                    </div>

                <div class="row mb-4 mt-4">

                <?php 
                                
                create_picture_block( 'col-md-4', site_url('/brands/innovations-lighting'), 'https://lightyouhome.com/wp-content/uploads/2019/09/516-4I-SN-G121-8RB.jpg', 'Shop Innovations', 38562, 1, 'Innovations Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/golden-lighting'), '/wp-content/uploads/2018/11/7001-8P-ABZ_zoom.jpg', 'Shop Golden Lighting', 12673, 1, 'Golden Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/quoizel-lighting'), 'https://lightyourhome.com/wp-content/uploads/2019/03/VLT8603WT.jpg', 'Shop Quoizel Lighting', 12673, 1, 'Quoizel Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/artcraft-lighting'), '/wp-content/uploads/2020/03/AC11156.jpg', 'Shop Artcraft Lighting', 163189, 1, 'Artcraft Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/kichler-lighting'), '/wp-content/uploads/2019/05/42869NI-1.jpg', 'Shop Kichler Lighting', 21105, 1, 'Kichler Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/elan-lighting'), '/wp-content/uploads/2020/01/84178.jpg', 'Shop Élan Lighting', 106863, 1, 'Élan Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/generation-lighting'), '/wp-content/uploads/2020/01/FS-EC1006BBS-1-scaled.jpg', 'Shop Generation Lighting', 112194, 1, 'Generation Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/feiss-collection'), '/wp-content/uploads/2020/01/FS-OL14503ANBZPBB-scaled.jpg', 'Shop Feiss Collection', 124398, 1, 'Feiss Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/z-lite-lighting'), '/wp-content/uploads/2019/09/3000SF-SG-1.jpg', 'Shop Z-Lite', 34981, 1, 'Z-Lite Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/savoy-house-lighting'), '/wp-content/uploads/2019/09/3000SF-SG-1.jpg', 'Shop Savoy House', 95848, 1, 'Savoy House'  );

                create_picture_block( 'col-md-4', site_url('/brands/elk-home'), '/wp-content/uploads/2019/10/d1494.jpg', 'Shop Elk Home', 58230, 1, 'Elk Home'  );

                create_picture_block( 'col-md-4', site_url('/brands/uttermost-lighting-and-decor'), '/wp-content/uploads/2019/01/216-06428_3_-3.jpg', 'Shop Uttermost', 9268, 1, 'Uttermost'  );

                create_picture_block( 'col-md-4', site_url('/brands/livex-lighting'), '/wp-content/uploads/2019/10/49824-33_04.jpg', 'Shop Livex Lighting', 64116, 1, 'Livex Lighting'  );

                create_picture_block( 'col-md-4', site_url('/brands/hudson-valley-lighting'), '/wp-content/uploads/2019/07/6710-AGB_800.jpg', 'Shop Hudson Valley', 27809, 1, 'Hudson Valley'  );

                create_picture_block( 'col-md-4', site_url('/product-category/mitzi-lighting'), '/wp-content/uploads/2019/05/HL268201-JD.png', 'Shop Mitzi', 23510, 1, 'Mitzi'  );

                ?>

                    					<!--<div class="col-md-4">
                        <div class="block-container">
                            <a href="<?php //echo site_url('/brands/millennium-lighting'); ?>">
                                <div class="block-picture">
                                <?php //echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2019/10/3505-MB-BN.jpg">', wp_get_attachment_metadata(50837), 50837 ); ?>
                                </div>
                                <div class="block-caption-wrapper">
                                    <div class="block-caption-container">
                                        <h3 class="block-heading">Millennium Lighting</h3>
                                        <a style="text-align: center;" href="<?php //echo site_url('/brands/millennium-lighting'); ?>" class="block-shop-link">Shop Millennium</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>-->


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
