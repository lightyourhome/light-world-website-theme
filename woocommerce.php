<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package light_world
*/
get_header(); ?>

<?php if ( is_product_category() ) : ?>

<!-- DISPLAYS HEADING SECTION OF PRODUCT CATEGORY PAGES -->
<div class="container justify-content-center">

  <div class="row">

    <div class="col-md-12 ml-1 mt-3 mb-3">

      <nav class="category-breadcrumb">

        <?php lyh_breadcrumbs(); ?>

      </nav>

    </div>

  </div>

  <div class="row">

    <?php if ( is_product_category() && is_parent_category() == FALSE && is_designer_collection() == FALSE ) : ?>

    <div class="col-md-12 col-12" style="background-color: #f6f6f6;">

      <div class="row">

        <div class="col-md-12">

          <div class="prod_cat_text mt-5 mb-5">

            <h2 class="prod-cat-title">

              <?php echo get_term_meta(getCategoryId(), 'wh_meta_title', true); ?>

            </h2>

          </div>

        </div>

      </div>

    </div>

    <?php endif; ?>

    <?php if ( is_product_category() && is_parent_category() == TRUE ) : ?>

    <div id="cat-page_heading_image" class="col-md-8">

      <?php categoryPageImages( getCategoryId() ); ?>

    </div>

    <div class="col-lg-4 col-12" style="background-color: #fbfbfb;">

      <div class="row h-100 justify-content-center">

        <div class="col-lg-12 col-12 my-auto">

          <div class="prod_cat_text" style="background-color: #fbfbfb;  padding: 10px;">

            <h2 class="prod-cat-title">

              <?php echo get_term_meta(getCategoryId(), 'wh_meta_title', true); ?>

            </h2>

          </div>

        </div>

      </div>

    </div>

    <?php elseif ( is_product_category() && is_designer_collection() == TRUE ) : ?>

    <div id="cat-page_heading_image" class="col-md-4 col-12">

      <?php categoryPageImages(getCategoryId()); ?>

    </div>

    <div class="col-lg-8 col-12" style="background-color: #fbfbfb;">

      <div class="row h-100 justify-content-center">

        <div class="col-lg-12 col-12 my-auto">

          <div class="prod_cat_text" style="background-color: #fbfbfb;  padding: 10px;">

            <h2 class="prod-cat-title">

              <?php echo get_term_meta(getCategoryId(), 'wh_meta_title', true); ?>

            </h2>

            <br>

            <p><?php echo get_term_meta(getCategoryId(), 'wh_meta_desc', true); ?></p>

          </div>

        </div>

      </div>

    </div>

    <?php endif; ?>

  </div>

</div>

<?php endif; ?>

<?php if ( wp_is_mobile() && is_product_category() || wp_is_mobile() && is_shop() ) : ?>
  
<div class="row justify-content-center filter-overlay-button">

  <div class="col-md-6">

    <a id="open-filter-overlay" class="button" style="cursor: pointer;">Refine Your Search</a>

  </div>

</div>

<div id="filter-overlay">

  <a id="close-filter-overlay" href="javascript:void(0)">&times;</a>

  <div class="filter-overlay-heading">

    <h2>Refine Your Search</h2>

  </div>

  <?php if (getCategoryId() == 81) { echo do_shortcode('[br_filters_group group_id=32535]'); } else { echo do_shortcode('[br_filters_group group_id=27306]'); } ?>

</div>

<?php endif; ?>

<!-- class="wrapper" id="woocommerce-wrapper" -->

<div class="shop-wrapper" id="woocommerce-wrapper-shop">

  <!-- class = "container" -->

  <div class="shop-container">

    <div class="row">

      <!-- Sidebar Left -->

      <div class="col-sm-2">

        <?php if ( is_shop() && empty( get_search_query() ) ) { lyh_breadcrumbs();  } ?>

        <?php dynamic_sidebar( 'woocommerce-sidebar-1' ); ?>

      </div>

      <div id="primary" class="<?php if ( ! is_product() ) : ?>col-md-10<?php else : ?>col-md-12<?php endif; ?> content-area">

        <main id="main" class="site-main" role="main">

          <!-- The WooCommerce loop -->
          <?php if ( is_shop() && empty( get_search_query() ) ) : ?>

          <div class="col-md-12 col-12 mb-5" style="background-color: #f6f6f6;">

            <div class="row">

              <div class="col-md-12">

                <div class="prod_cat_text mt-5 mb-5">

                  <h2 class="prod-cat-title">Full Selection</h2>

                </div>

              </div>

            </div>

          </div>

          <?php elseif ( is_shop() && !empty(get_search_query()) ) : ?>

          <div class="row">

            <div class="col-md-12 col-12 mb-5" style="background-color: #f6f6f6;">

              <div class="row">

                <div class="col-md-12">

                  <div class="prod_cat_text mt-5 mb-5">

                    <h2 class="prod-cat-title">Results for: <strong><?php the_search_query(); ?></strong></h2>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <?php endif; ?>

          <div class="mobile-only">

            <div class="row">
              
              <div class="col">

                <?php echo woocommerce_catalog_ordering(); ?>

              </div>

              <div class="col">

                <?php echo do_shortcode('[wppp]'); ?>

              </div>

            </div>

            <div class="row">

              <div class="col">

                <?php echo woocommerce_result_count(); ?>

              </div>

            </div>

          </div>

          <div class="desktop-only">

            <?php echo woocommerce_result_count(); ?>
            <?php echo woocommerce_catalog_ordering(); ?>
            <?php echo do_shortcode('[wppp]'); ?>

          </div>

          <?php woocommerce_content();  ?>

        </main>
        <!-- #main -->

      </div>
      <!-- #primary -->   

    </div>

  </div>
  <!-- Container end -->

  <section class="term-description">

    <div class="container">

      <?php echo category_description(); ?>

    </div>

  </section>

</div>
<!-- Wrapper end -->

<?php get_footer(); ?>
