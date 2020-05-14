<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product_attributes ) {
	return;
}

if ( $product->is_type('variable') ) {

		$variation_tables = array();

		//store the attributes that have multiple values
		$multiple_attributes = array();

		if ( ! empty( $product->get_default_attributes() ) ) {

			$default_rows_output = '';

			foreach ( $product_attributes as $product_attribute_key => $product_attribute ) {

				$default_rows_output .= '<tr class="woocommerce-product-attributes-item variable-product-attribute-row woocommerce-product-attributes-item--' . esc_attr( $product_attribute_key ) . '" data-variation-id="' . esc_attr( $variation_id ) . '">';

				$default_rows_output .= '<th class="woocommerce-product-attributes-item__label" data-attribute="' . esc_attr( $product_attribute_key ) . '">';

				if ( tfs_get_product_spec_tool_tip( $product_attribute_key ) !== false ) :

					$default_rows_output .= '<div id="tool-tip--' . esc_attr( $product_attribute_key ) . '" class="spec-tool-tip" style="display: none;"><span class="spec-tool-tip-text">' . tfs_get_product_spec_tool_tip( $product_attribute_key ) .'</span></div>';

					$default_rows_output .= '<i class="fa fa-info-circle pr-2 spec-tool-tip-info-icon" aria-hidden="true" style="display: inline-block;"></i>';
	
				endif;

				$default_rows_output .= wp_kses_post( $product_attribute['label'] ) . '</th';

				$default_rows_output .= '<td class="woocommerce-product-attributes-item__value"><p>' . wp_kses_post( $product_attribute['value'] ) . '</p></td>';

				$default_rows_output .= '</tr>';

			}

			array_push( $variation_tables, array(

				'variation_id' => 'default',
				'rows' => $default_rows_output

			));


		}

		foreach ( $product->get_visible_children() as $variation_id ) {

			$product_variation = wc_get_product( $variation_id );

			$product_variation_attributes = $product_variation->get_attributes();

			$variation_row_output = '';

			foreach ( $product_attributes as $product_attribute_key => $product_attribute ) {

				$string_to_arr = explode(',', $product_attribute['value'] );

				$attr_key = str_replace('attribute_', '', $product_attribute_key);
				$variation_attribute_value = $product_variation->get_attribute($attr_key);

				//IF THE ATTRIBUTE HOLDS MULTIPLE PIECES OF DATA, MAKE A SEPARATE ROW ACCORDING TO THE VARIATION ORDER
				if ( sizeOf( $string_to_arr ) > 1 && ! empty($variation_attribute_value) ) {

					//ADD THE VARIATION ROWS
					$variation_row_output .= '<tr class="woocommerce-product-attributes-item variable-product-attribute-row woocommerce-product-attributes-item--' . esc_attr( $product_attribute_key ) . '" data-variation-id="' . esc_attr( $variation_id ) . '">';

					$variation_row_output .= '<th class="woocommerce-product-attributes-item__label" data-attribute="' . esc_attr( $product_attribute_key ) . '">';

					if ( tfs_get_product_spec_tool_tip( $product_attribute_key ) !== false ) :

						
						$variation_row_output .= '<div id="tool-tip--' . esc_attr( $product_attribute_key ) . '" class="spec-tool-tip" style="display: none;"><span class="spec-tool-tip-text">' . tfs_get_product_spec_tool_tip( $product_attribute_key ) .'</span></div>';

						$variation_row_output .= '<i class="fa fa-info-circle pr-2 spec-tool-tip-info-icon" aria-hidden="true" style="display: inline-block;"></i>';	


					endif;

					$variation_row_output .= wp_kses_post( $product_attribute['label'] ) . '</th>';

					$variation_row_output .= '<td class="woocommerce-product-attributes-item__value"><p>' . wp_kses_post( $variation_attribute_value ) . '</p></td>';

					$variation_row_output .= '</tr>';

				} else { //CREATE THE NORMAL ROWS

				$variation_row_output .= '<tr class="woocommerce-product-attributes-item variable-product-attribute-row woocommerce-product-attributes-item--' . esc_attr( $product_attribute_key ) . '">';

				$variation_row_output .= '<th class="woocommerce-product-attributes-item__label" data-attribute="' . esc_attr( $product_attribute_key ) . '">';

				if ( tfs_get_product_spec_tool_tip( $product_attribute_key ) !== false ) :
				
					$variation_row_output .= '<div id="tool-tip--' . esc_attr( $product_attribute_key ) . '" class="spec-tool-tip" style="display: none;"><span class="spec-tool-tip-text">' . tfs_get_product_spec_tool_tip( $product_attribute_key ) .'</span></div>';

					$variation_row_output .= '<i class="fa fa-info-circle pr-2 spec-tool-tip-info-icon" aria-hidden="true" style="display: inline-block;"></i>';	
	
				endif;

				$variation_row_output .=  wp_kses_post( $product_attribute['label'] ) . '</th>';


				if ( ! empty( $product->get_attribute($attr_key) ) ) {

					$variation_row_output .=	'<td class="woocommerce-product-attributes-item__value"><p>' . wp_kses_post( $product->get_attribute($attr_key) ) . '</p></td>';

				} else {

					$variation_row_output .=	'<td class="woocommerce-product-attributes-item__value"><p>' . wp_kses_post( $product_attribute['value'] ) . '</p></td>';

				}

				$variation_row_output .=	'</tr>';

				}

			}

		  $current_table = array(

				'variation_id' => $variation_id,
			  'rows' => $variation_row_output

		  );

		array_push( $variation_tables, $current_table );

	  }

		$table_json = wp_json_encode( $variation_tables );

		?>

		 <table id="woocommerce-variable-product-attributes-table" class="woocommerce-product-attributes shop_attributes" data-table-json="<?php echo esc_attr( $table_json ); ?>">

		<?php

	} else {

		//CREATE A PRINTABLE TABLE FOR SIMPLE PRODUCTS
		$table_data_and_headings = array();

		foreach ( $product_attributes as $product_attribute_key => $product_attribute ) {

			$attr_key = str_replace('attribute_', '', $product_attribute_key);

			$table_heading = '';
			$table_data = '';

			$table_heading = '<th class="woocommerce-product-attributes-item__label">' .  $product_attribute['label']  . '</th>';
			$table_data    = '<td class="woocommerce-product-attributes-item__value">' .  $product_attribute['value']  . '</td>';

			array_push( $table_data_and_headings, $table_heading);
			array_push( $table_data_and_headings, $table_data );

		}

		$print_spec_table = array();

			for ( $col_count = 0; $col_count < sizeOf($table_data_and_headings); $col_count += 6 ) {

				$row = '<tr>';

				for ( $count = $col_count; $count < $col_count + 6; $count++) {

					$row .= $table_data_and_headings[$count];

				}

				$row .= '</tr>';

				array_push( $print_spec_table, $row );

			}

			$print_table_json = wp_json_encode( $print_spec_table );

			$json_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $print_table_json ) : _wp_specialchars( $print_table_json, ENT_QUOTES, 'UTF-8', true );

		?>

		<table id="woocommerce-simple-product-attributes-table" class="woocommerce-product-attributes shop_attributes" data-printable_table="<?php echo $json_attr; ?>">

		<?php

		foreach ( $product_attributes as $product_attribute_key => $product_attribute ) : ?>
			
			<tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php echo esc_attr( $product_attribute_key ); ?>">

				<th class="woocommerce-product-attributes-item__label" data-attribute="<?php echo esc_attr( $product_attribute_key ); ?>">

					<?php if ( tfs_get_product_spec_tool_tip( $product_attribute_key ) !== false ) : ?>

						<div id="tool-tip--<?php echo esc_attr( $product_attribute_key ); ?>" class="spec-tool-tip" style="display: none;">
							<span class="spec-tool-tip-text">
								<?php echo tfs_get_product_spec_tool_tip( $product_attribute_key ); ?>
							</span>
						</div>

						<i class="fa fa-info-circle pr-2 spec-tool-tip-info-icon" aria-hidden="true" style="display: inline-block;"></i>

					<?php endif; ?>

					<?php echo wp_kses_post( $product_attribute['label'] ) ?>
					
				</th>

		  		<td class="woocommerce-product-attributes-item__value"><?php echo wp_kses_post( $product_attribute['value'] ) ?></td>

			</tr>

	<?php	endforeach;

	}

	?>

</table>
