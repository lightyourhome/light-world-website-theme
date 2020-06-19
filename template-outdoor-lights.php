<?php /* Template Name: Outdoor Lights */ ?>

<?php get_header(); ?>

<!-- mobile hero scene   -->
<div class="mobile-only">

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2020/06/outdoor_banner_mobile.jpg">', wp_get_attachment_metadata(172689), 172689 ); ?>
            </div>
        </div>
    </div>

</div>

<!-- desktop/tablet slider -->
<div class="desktop-only">

    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/06/outdoor_lighting.jpg">', wp_get_attachment_metadata(172686), 172686 ); ?>

</div>

<div class="container">

    <div class="row mt-5">

		<div class="col-sm-4 col-6 mt-5">

            <a href="<?php echo site_url('/product-category/outdoor-lighting/outdoor-wall-lighting'); ?>">
                <div class="brand-page_cat_image_container pt-3">
                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="https://www.lightyourhome.com/wp-content/uploads/2019/10/BKR8410K_2_.jpg">', wp_get_attachment_metadata(45461), 45461 ); ?>
					<div class="pb-3 pt-3">
                        <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Wall Lighting</h3>
                    </div>
                </div>
            </a>

        </div>

        <div class="col-sm-4 col-6 mt-5">

            <a href="<?php echo site_url('/product-category/outdoor-lighting/outdoor-pendants'); ?>">
                <div class="brand-page_cat_image_container pt-3">
                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/05/45423_3.jpg">', wp_get_attachment_metadata(167326), 167326 ); ?>
					<div class="pb-3 pt-3">
                        <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Pendants</h3>
                    </div>
                </div>
            </a>

        </div>

		<div class="col-sm-4 col-6 mt-5">

            <a href="<?php echo site_url('/product-category/outdoor-lighting/outdoor-chandeliers'); ?>">
                <div class="brand-page_cat_image_container pt-3">
                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/01/FS-OLF329612ORB-scaled.jpg">', wp_get_attachment_metadata(126426), 126426 ); ?>
					<div class="pb-3 pt-3">
                        <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Chandeliers</h3>
                    </div>
                </div>
            </a>

        </div>

		<div class="col-sm-4 col-6 mt-5">

            <a href="<?php echo site_url('/product-category/outdoor-lighting/flush-mounts'); ?>">
                <div class="brand-page_cat_image_container pt-3">
                    <?php echo wp_image_add_srcset_and_sizes('<img style="height: auto; width: 100%;" src="/wp-content/uploads/2020/04/30098CLDBZ.jpg">', wp_get_attachment_metadata(165825), 165825 ); ?>
					<div class="pb-3 pt-3">
                        <h3 class="brand-page_cat_headings" style="text-align: center;" class="mb-2">Flush Mounts</h3>
                    </div>
                </div>
            </a>

        </div>

        <div class="col-md-12 mt-5" style="text-align: center; background-color: #f6f6f6;">

            <div class="mb-5 mt-5">

                <a class="button" href="<?php echo site_url('/product-category/outdoor-lighting'); ?>">Shop All Outdoor Lighting</a>

            </div>

        </div>


    </div>

</div>

<div class="wrapper" id="sale-page-wrapper">

    <div id="content" class="container">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

                <!-- BEST SELLERS -->
                <div class="row">

                    <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                        <h2>Best Selling Outdoor Lights</h2>
                    </div>

                    <div class="col-md-12">
                        <?php echo do_shortcode('[products limit="4" columns="4" best_selling="true" category="outdoor-wall-lighting" ]'); ?>
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

<!-- ACCORDION  -->
<!-- <div id="accordion-container" class="row justify-content-center mt-5" style="background-color: #f6f6f6;">

    <div class="col-md-8 p-4">

        <div id="accordion-hidden-content"></div>
        <br>
        <a href="javascript:void(0)" id="accordion-read-more">Read More</a>
            
    </div>

</div> -->

<?php get_footer(); ?>