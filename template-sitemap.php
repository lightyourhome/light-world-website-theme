<?php /* Template Name: Site Map */ ?>

<?php get_header(); ?>

<div class="container px-0 mt-5">
  <div class="row">
    <div class="col-md-12 title-container" style="text-align: center;">
      <div class="home-hero-desc mt-5 mb-5">
        <h1>Site Map</h1>
      </div>
    </div>
  </div>
</div>

<div class="wrapper" id="sale-page-wrapper">

    <div id="content" class="container">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

                <div class="row mb-4 mt-4">

                    <div class="col-md-4 col-12">
                
                        <?php echo do_shortcode('[wp_sitemap_page only="page"]'); ?>
                
                    </div>

                    <div class="col-md-4 col-12">
                
                        <?php echo do_shortcode('[wp_sitemap_page only="product_cat"]'); ?>
                
                    </div>

                    <div class="col-md-4 col-12">
                
                         <?php echo do_shortcode('[wp_sitemap_page only="post"]'); ?>
                
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
