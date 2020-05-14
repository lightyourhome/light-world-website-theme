<?php

/**
* The template for displaying 404 pages
*/


get_header(); ?>

<div class="wrapper" id="page-wrapper">

    <div id="content" class="container">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

              <div class="row mt-5 justify-content-center">

                <div class="col-md-6">

               	  <h1>404 Error</h1>

                </div>

              </div>


              <div class="row mt-5 justify-content-center">

                <div class="col-md-6">

               	  <h3>Whoops! We can't seem to find that page!</h3>

                </div>

              </div>


              <div class="row mt-5 mb-5 justify-content-center">

                <div style="display: block; margin 0 auto;">

               	  <a href="<?php echo site_url(); ?>"><button type="button" class="button">Return to Home</button></a>

                </div>

              </div>


            </main><!-- end main -->

        </div><!-- end primary -->

     </div><!-- end content -->

</div><!-- end wrapper -->

<?php get_footer(); ?>
