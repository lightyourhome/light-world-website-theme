<?php

/**
* Functions that adjust the Admin Area of WooCommerce
*
*/

/****************************************************

***** BEGIN PRODUCT CATEGORY CUSTOM META FIELDS ******

*****************************************************/

add_action('product_cat_add_form_fields', 'wh_taxonomy_add_new_meta_field', 10, 1);
if ( ! function_exists('wh_taxonomy_add_new_meta_field') ) :

  /**
  * Adds Custom Fields for product category title and description
  */
  function wh_taxonomy_add_new_meta_field() {

    ?>

      <div class="form-field">
          <label for="wh_meta_title"><?php _e('Meta Title', 'wh'); ?></label>
          <input type="text" name="wh_meta_title" id="wh_meta_title">
          <p class="description"><?php _e('Enter a Category Title', 'wh'); ?></p>
      </div>
      <div class="form-field">
          <label for="wh_meta_desc"><?php _e('Meta Description', 'wh'); ?></label>
          <textarea name="wh_meta_desc" id="wh_meta_desc"></textarea>
          <p class="description"><?php _e('Enter a Category Description, <= 500 character', 'wh'); ?></p>
      </div>
      <?php
  }

endif;

add_action('product_cat_edit_form_fields', 'wh_taxonomy_edit_meta_field', 10, 1);
if ( ! function_exists('wh_taxonomy_edit_meta_field') ) :

  //Product Cat Edit page
  function wh_taxonomy_edit_meta_field($term) {

      //getting term ID
      $term_id = $term->term_id;

      // retrieve the existing value(s) for this meta field.
      $wh_meta_title = get_term_meta($term_id, 'wh_meta_title', true);
      $wh_meta_desc = get_term_meta($term_id, 'wh_meta_desc', true);
      ?>
      <tr class="form-field">
          <th scope="row" valign="top"><label for="wh_meta_title"><?php _e('Category Title', 'wh'); ?></label></th>
          <td>
              <input type="text" name="wh_meta_title" id="wh_meta_title" value="<?php echo esc_attr($wh_meta_title) ? esc_attr($wh_meta_title) : ''; ?>">
              <p class="description"><?php _e('Enter a Category Title', 'wh'); ?></p>
          </td>
      </tr>
      <tr class="form-field">
          <th scope="row" valign="top"><label for="wh_meta_desc"><?php _e('Category Description', 'wh'); ?></label></th>
          <td>
              <textarea name="wh_meta_desc" id="wh_meta_desc" style="height: 400px;"><?php echo esc_attr($wh_meta_desc) ? esc_attr($wh_meta_desc) : ''; ?></textarea>
              <p class="description"><?php _e('Enter a Category Description (ONLY USED WITH DESIGNER COLLECTIONS FOR BIO)', 'wh'); ?></p>
          </td>
      </tr>
      <?php
  }

endif;

add_action('edited_product_cat', 'wh_save_taxonomy_custom_meta', 10, 1);
add_action('create_product_cat', 'wh_save_taxonomy_custom_meta', 10, 1);
if ( ! function_exists('wh_save_taxonomy_custom_meta') ) :
  // Save extra taxonomy fields callback function.
  function wh_save_taxonomy_custom_meta($term_id) {

      $wh_meta_title = filter_input(INPUT_POST, 'wh_meta_title');
      $wh_meta_desc = filter_input(INPUT_POST, 'wh_meta_desc');

      update_term_meta($term_id, 'wh_meta_title', $wh_meta_title);
      update_term_meta($term_id, 'wh_meta_desc', $wh_meta_desc);
  }

endif;

/****************************************************

*** BEGIN SINGLE PRODUCT PAGE CUSTOM META FIELDS ***

*****************************************************/

add_action( 'woocommerce_product_options_sku', 'tfs_add_product_status_meta' );
if ( ! function_exists('tfs_add_product_status_meta') ) :

  /**
  * Adds Product Status Custom Field to WooCommerce Product Editor Under General Tab
  */
  function tfs_add_product_status_meta() {
  $args = array(
  'label' => __( 'Product Status', 'woocommerce' ),
  'placeholder' => __( 'Enter the product status...', 'woocommerce' ),
  'id' => '_tfs_product_status',
  );

  $second_args = array(
    'label' => __( 'GTIN', 'woocommerce' ),
    'placeholder' => __( 'Enter GTIN Status...', 'woocommerce' ),
    'id' => '_tfs_gtin_status',
  );
  woocommerce_wp_text_input( $args );
  }

endif;


/* SAVE THE PRODUCT STATUS AFTER UPDATING ON PRODUCT PAGES IN ADMIN */
add_action( 'woocommerce_process_product_meta', 'tfs_save_product_status_meta' );
if ( ! function_exists('tfs_save_product_status_meta') ) :

  /**
  * Saves Data Entered into Product and GTIN Status Custom Fields in Product Editor
  */
  function tfs_save_product_status_meta( $post_id ) {
  // grab the custom SKU from $_POST
  $product_status = isset( $_POST[ '_tfs_product_status' ] ) ? sanitize_text_field( $_POST[ '_tfs_product_status' ] ) : '';
  $product_status = isset( $_POST[ '_tfs_gtin_status' ] ) ? sanitize_text_field( $_POST[ '_tfs_gtin_status' ] ) : '';


  // grab the product
  $product = wc_get_product( $post_id );

  // save the custom SKU using WooCommerce built-in functions
  $product->update_meta_data( '_tfs_product_status', $product_status );
  $product->update_meta_data( '_tfs_gtin_status', $product_status );

  $product->save();
  }

endif;


/****************************************************

* BEGIN PRODUCT BULK EDITOR TABLE CUSTOM META FIELDS *

*****************************************************/

add_filter('manage_product_posts_columns', 'tfs_add_product_status_column');
if ( ! function_exists('tfs_add_product_status_column') ) :

  /**
  * Adds GTIN and Status Column Headings to Product Bulk Editor Table
  */
  function tfs_add_product_status_column($columns) {

    $new_columns = array(
    		'tfs-product-status' => __('Status', 'WooCommerce'),
        'tfs-GTIN-status' => __('GTIN', 'WooCommerce')
    	);
        return array_merge($columns, $new_columns);
  }

endif;

add_action( 'manage_product_posts_custom_column', 'tfs_add_product_status_column_values', 10, 2 );
if ( ! function_exists('tfs_add_product_status_column_values') ) :

  /**
  * Gets GTIN and Status Column Values from respective meta fields and displays them in the product bulk editor table
  */
  function tfs_add_product_status_column_values( $column, $postid ) {
      if ( $column == 'tfs-product-status' ) {
          echo get_post_meta($postid, '_tfs_product_status', true);
      }
      if ( $column == 'tfs-GTIN-status') {
          echo get_post_meta($postid, '_tfs_gtin_status', true);
      }
  }

endif;


/**********************************************************

ADD CUSTOM FIELDS TO WOOCOMMERCE BULK EDITOR SEARCH QUERIES

************************************************************/

add_filter( 'request', 'request_query_product_status', 20 );

if ( ! function_exists('request_query_product_status') ) :

  /**
   * Alter the query vars to include products which have the meta we are searching for.
   *
   * @param array $query_vars The current query vars.
   *
   * @return array
   */
  function request_query_product_status( $query_vars ) {

  	global $typenow;
  	global $wpdb;
  	global $pagenow;

  	if ( 'product' === $typenow && isset( $_GET['s'] ) && 'edit.php' === $pagenow ) {
  		$search_term            = esc_sql( sanitize_text_field( $_GET['s'] ) );
  		$meta_key               = '_tfs_product_status';
  		$post_types             = array( 'product', 'product_variation' );
  		$search_results         = $wpdb->get_results(
  			$wpdb->prepare(
  				"SELECT DISTINCT posts.ID as product_id, posts.post_parent as parent_id FROM {$wpdb->posts} posts LEFT JOIN {$wpdb->postmeta} AS postmeta ON posts.ID = postmeta.post_id WHERE postmeta.meta_key = '{$meta_key}' AND postmeta.meta_value LIKE %s AND posts.post_type IN ('" . implode( "','", $post_types ) . "') ORDER BY posts.post_parent ASC, posts.post_title ASC",
  				'%' . $wpdb->esc_like( $search_term ) . '%'
  			)
  		);
  		$product_ids            = wp_parse_id_list( array_merge( wp_list_pluck( $search_results, 'product_id' ), wp_list_pluck( $search_results, 'parent_id' ) ) );
  		$query_vars['post__in'] = array_merge( $product_ids, $query_vars['post__in'] );
  	}

  	return $query_vars;
  }

endif;

add_filter( 'request', 'request_query_gtin_status', 20 );

if ( ! function_exists('request_query_gtin_status') ) :

  function request_query_gtin_status( $query_vars ) {

    global $typenow;
    global $wpdb;
    global $pagenow;

    if ( 'product' === $typenow && isset( $_GET['s'] ) && 'edit.php' === $pagenow ) {
      $search_term            = esc_sql( sanitize_text_field( $_GET['s'] ) );
      $meta_key               = '_tfs_gtin_status';
      $post_types             = array( 'product', 'product_variation' );
      $search_results         = $wpdb->get_results(
        $wpdb->prepare(
          "SELECT DISTINCT posts.ID as product_id, posts.post_parent as parent_id FROM {$wpdb->posts} posts LEFT JOIN {$wpdb->postmeta} AS postmeta ON posts.ID = postmeta.post_id WHERE postmeta.meta_key = '{$meta_key}' AND postmeta.meta_value LIKE %s AND posts.post_type IN ('" . implode( "','", $post_types ) . "') ORDER BY posts.post_parent ASC, posts.post_title ASC",
          '%' . $wpdb->esc_like( $search_term ) . '%'
        )
      );
      $product_ids            = wp_parse_id_list( array_merge( wp_list_pluck( $search_results, 'product_id' ), wp_list_pluck( $search_results, 'parent_id' ) ) );
      $query_vars['post__in'] = array_merge( $product_ids, $query_vars['post__in'] );
    }

    return $query_vars;

  }

endif;


//Display Fields in admin on product edit screen
add_action( 'woocommerce_product_after_variable_attributes', 'woo_variable_fields', 10, 3 );
if ( ! function_exists('woo_variable_fields') ) :

  // Create new fields for variations
  function woo_variable_fields( $loop, $variation_data, $variation ) {

    echo '<div class="variation-custom-fields">';

      // Text Field
      woocommerce_wp_text_input(
        array(
          'id'          => 'variation-spec-sheet',
          'label'       => __( 'Variation Spec Sheet', 'woocommerce' ),
          'placeholder' => 'Enter a spec sheet link',
          //'desc_tip'    => true,
          'wrapper_class' => 'form-row form-row-first',
          //'description' => __( 'Enter the custom value here.', 'woocommerce' ),
          'value'       => get_post_meta($variation->ID, '_text_field_spec', true)
        )
      );

      // Text Field
      woocommerce_wp_text_input(
        array(
          'id'          => 'variation-installation-sheet',
          'label'       => __( 'Variation Installation Sheet', 'woocommerce' ),
          'placeholder' => 'Enter a installation sheet link',
          //'desc_tip'    => true,
          'wrapper_class' => 'form-row form-row-first',
          //'description' => __( 'Enter the custom value here.', 'woocommerce' ),
          'value'       => get_post_meta($variation->ID, '_text_field_installation', true)
        )
      );

    echo '</div>';

  }

endif;

//Save variation fields values
add_action( 'woocommerce_save_product_variation', 'save_variation_fields', 10, 2 );
if ( ! function_exists('save_variation_fields') ) :

  /** Save new fields for variations */
  function save_variation_fields( $variation_id, $i) {

  $text_field_spec = stripslashes( $_POST['variation-spec-sheet'] );
  update_post_meta( $variation_id, '_text_field_spec', esc_attr( $text_field_spec ) );

  $text_field_installation = stripslashes( $_POST['variation-installation-sheet'] );
  update_post_meta( $variation_id, '_text_field_installation', esc_attr( $text_field_installation ) );


  }

endif;


