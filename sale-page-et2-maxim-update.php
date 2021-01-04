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

                <div class="row mb-4 mt-4 justify-content-center">

                    <div id="sales-page-featured-sales" style="border-bottom: 2px solid #d3d3d3;" class="col-md-12 mt-3 mb-3">
                        <h1>Our Featured Sales</h1>
                    </div>

                    <br>
                    <h3>Sorry! We do not currently have any sales.</h3>

                    <!-- <div class="col-md-12" style="border-top: 2px solid #d3d3d3;"></div> -->

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
