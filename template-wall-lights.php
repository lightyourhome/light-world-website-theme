<?php /* Template Name: Wall Lights */ ?>

<?php get_header(); ?>

<!-- mobile hero scene -->
<div class="mobile-only">

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <img id="home-image" src="<?php echo site_url('/wp-content/uploads/2020/03/wll_lights_mobile.jpg'); ?>">
            </div>
            <div class="col-md-12" style="background-color: #f6f6f6; text-align: center;">
                <div class="home-hero-desc">
                    <h3>Wall Lights</h3>
                    <p>Add Layers of Light</p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- desktop/tablet slider -->
<div class="desktop-only">

  <?php echo do_shortcode('[rev_slider alias="wall_lights_slider1"][/rev_slider]'); ?>

</div>

<div class="wrapper" id="sale-page-wrapper">

    <div id="content" class="container">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

              <div class="row justify-content-center mt-5">

                <div class="col-md-6">
                  <!-- BATH AND VANITY -->
                  <div id="new-and-trending" class="picture-container" style="width: 100%;">
                   <a href="<?php echo site_url('/product-category/bath-vanity-lights/'); ?>"><img src="<?php echo site_url('/wp-content/uploads/2019/06/bath-and-vanity.jpg'); ?>" class="staff-picks-image" style="width: 100%; height: 250px; "></a>
                   <div class="button-container">
                    <a href="<?php echo site_url('/product-category/bath-vanity-lights/'); ?>"><button class="button staff-picks-shop-button">SHOP BATH AND VANITY
                    </button></a>
                   </div>
                  <div class="image-title-bar" style="text-align: center;">
                    <h3 class="box-headings"><a href="<?php echo site_url('/product-category/bath-vanity-lights/'); ?>">BATH AND VANITY</a></h3>
                  </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <!-- SCONCES -->
                  <div id="new-and-trending" class="picture-container" style="width: 100%;">
                   <a href="<?php echo site_url('/product-category/sconces'); ?>"><img src="<?php echo site_url('/wp-content/uploads/2019/06/sconces.jpg'); ?>" class="staff-picks-image" style="width: 100%; height: 250px; "></a>
                   <div class="button-container">
                    <a href="<?php echo site_url('/product-category/sconces'); ?>"><button class="button staff-picks-shop-button">SHOP SCONCES
                    </button></a>
                   </div>
                  <div class="image-title-bar" style="text-align: center;">
                    <h3 class="box-headings"><a href="<?php echo site_url('/product-category/sconces'); ?>">SCONCES</a></h3>
                  </div>
                  </div>
                </div>

                <!-- BEST SELLERS -->
                <div class="col-md-12 pb-2 mb-5 mt-5" style="border-bottom: 2px solid #d3d3d3;">
                    <h2>Best Selling Wall Lights</h2>
                </div>

                <div class="col-md-12">
                    <?php echo do_shortcode('[products limit="4" columns="4" best_selling="true" category="bath-vanity-lights" ]'); ?>
                </div>

              </div>

              <!-- ACCORDION CAN GO INSIDE THIS ROW -->
              <div class="row justify-content-center mt-5 mb-5">
                <div class="col-md-10 p-5" style="background-color: #f6f6f6;">
                  <h2>Wall Lighting</h2>
                  <p>Wall Lighting is the perfect way to add more light to any room in your home. We know that finding the right light can be a hassle, so we created a hand-picked selection of our favorites. No matter what your style is, our selection of Bath Lighting and Sconces has something for everybody!</p>
                </div>
              </div>

            </main>

          </div>

       </div>

    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <!-- PENDANTS -->
          <div id="new-and-trending" class="picture-container" style="width: 100%;">
           <a href="<?php echo site_url('/product-category/pendant-lights/'); ?>"><img src="<?php echo site_url('/wp-content/uploads/2019/06/pendants.jpg'); ?>" class="staff-picks-image" style="width: 100%; height: 250px; "></a>
           <a href="<?php echo site_url('/product-category/pendant-lights/'); ?>"><div class="hover-button-container">
            <h3 class="hover-button-heading">EXPLORE</h3>
           </div></a>
          <div class="image-title-bar" style="text-align: center;">
            <h3 class="box-headings"><a href="<?php echo site_url('/product-category/pendant-lights/'); ?>">PENDANTS</a></h3>
          </div>
          </div>
        </div>

        <div class="col-md-3">
          <!-- CHANDELIERS -->
          <div id="new-and-trending" class="picture-container" style="width: 100%;">
           <a href="<?php echo site_url('/product-category/chandeliers/'); ?>"><img src="<?php echo site_url('/wp-content/uploads/2019/06/chandeliers.jpg'); ?>" class="staff-picks-image" style="width: 100%; height: 250px; "></a>
           <a href="<?php echo site_url('/product-category/chandeliers/'); ?>"><div class="hover-button-container">
            <h3 class="hover-button-heading">EXPLORE</h3>
           </div></a>
          <div class="image-title-bar" style="text-align: center;">
            <h3 class="box-headings"><a href="<?php echo site_url('/product-category/chandeliers/'); ?>">CHANDELIERS</a></h3>
          </div>
          </div>
        </div>

        <div class="col-md-3">
          <!-- FLUSH MOUNTS -->
          <div id="new-and-trending" class="picture-container" style="width: 100%;">
           <a href="<?php echo site_url('/product-category/flush-mounts'); ?>"><img src="<?php echo site_url('/wp-content/uploads/2019/06/conference_room_flush_mounts.jpg'); ?>" class="staff-picks-image" style="width: 100%; height: 250px; "></a>
           <a href="<?php echo site_url('/product-category/flush-mounts'); ?>"><div class="hover-button-container">
            <h3 class="hover-button-heading">EXPLORE</h3>
           </div></a>
          <div class="image-title-bar" style="text-align: center;">
            <h3 class="box-headings"><a href="<?php echo site_url('/product-category/flush-mounts'); ?>">FLUSH MOUNTS</a></h3>
          </div>
          </div>
        </div>

        <div class="col-md-3">
          <!-- SEMI FLUSH MOUNTS -->
          <div id="new-and-trending" class="picture-container" style="width: 100%;">
           <a href="<?php echo site_url('/product-category/semi-flush-mounts'); ?>"><img src="<?php echo site_url('/wp-content/uploads/2019/06/new_and_trending_flush_and_semi_flush_mounts.jpg'); ?>" class="staff-picks-image" style="width: 100%; height: 250px; "></a>
           <a href="<?php echo site_url('/product-category/semi-flush-mounts'); ?>"><div class="hover-button-container">
            <h3 class="hover-button-heading">EXPLORE</h3>
           </div></a>
          <div class="image-title-bar" style="text-align: center;">
            <h3 class="box-headings"><a href="<?php echo site_url('/product-category/semi-flush-mounts'); ?>">SEMI FLUSH MOUNTS</a></h3>
          </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="row mt-5 mb-5">
        <div class="col-md-12" style="border: 1px solid #d3d3d3;"></div>
      </div>
    </div>

<?php get_footer(); ?>
