<?php

if ( ! function_exists('single_product_manufacturer_shipping_and_info') ) :

    /**
     * Outputs the single product manufacturer shipping information. Also holds information about the manufacturer's warranties.
     * 
     * @string $category_slug - the slug of the current product category
     * @bool @warranty - whether or not the warranty of a manufacturer is currently available
     */
    function single_product_manufacturer_shipping_and_info( $category_slug, $warranty = false ) {

    //DEFINE GLOBAL PRODUCT AND ASSIGN PRODUCT SKU TO VARIABLE
    global $product;
    $sku = $product->get_sku();
  
    //GET THE FIRST 3 CHARACTERS OF THE SKU
    $manufacturer_id = substr($sku, 0, 3);
    $kichler_id = substr($sku, 0, 5);
  
    echo $kichler_sku;
  
    //DEFINE MANUFACTURER ID'S AND ASSIGN A DURATION TO ITS ID
    $manufacturer_info = array(
  
      '069-K' => [  //KICHLER
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => [
           'indoor' => 'https://www.kichler.com/customer-care/warranty-information/Indoor-Lighting-Warranty/',
          'outdoor' => 'https://www.kichler.com/customer-care/warranty-information/outdoor-lighting-warranty/',
          'fans'    => 'https://www.kichler.com/customer-care/warranty-information/ceiling-fan-warranty/'
          ]
        ],
  
      '069-E' => [  //ELAN
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => 'https://www.kichler.com/customer-care/warranty-information/elan-lighting-warranty/',
        ],
  
      'Q' => [ //QUOIZEL
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => 'https://www.quoizel.com/warranty/',
        'coupon'   => 'Get 15% Off This Item With Code "QUOIZEL15" at Checkout!'
        ],
  
      '0' => [ //SAVOY
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => 'https://www.savoyhouse.com/warranty'
        ],
  
      '081' => [ //MINKA
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => ''
      ],
  
      '072' => [ //LIVEX
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => 'https://www.lightyourhome.com/product-warranties/Livex_Lighting_Product_Warranty.pdf'
        ],
  
      '216' => [ //UTTERMOST
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => ''
        ],
  
      '065' => [ //KENROY
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => ''
        ],
  
      'CP-' => [ //CAPITAL
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => ''
        ],
  
      '110' => [ //WAC
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => ''
        ],
  
      '010' => [ //ARTCRAFT
          'shipping' => 'Ships in 3 - 4 Business Days',
          'warranty' => 'https://www.artcraftlighting.com/warranty/'
        ],
  
      'GO-' => [ //GOLDEN
          'shipping' => 'Ships in 3 to 4 Business Days',
          'warranty' => 'https://www.lightyourhome.com/product-warranties/Golden_Lighting_Product_Warranty.pdf'
        ],
  
      '301' => [ //KOVACS
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => ''
        ],
  
      '302' => [ //hudson valley
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => ''
        ],
  
      '051' => [ //ELK
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => '',
        'coupon-elk-lighting' => 'Get 15% Off This Item With Code "ELKLIGHTING15" at Checkout!'
        ],

      '699' => [ //CURREY
        'shipping' => 'Ships in 3 to 4 Business Days',
        'warranty' => [
          'text'   => 'Currey & Company warrants its products for one year against defects in materials and workmanship',
          'nolink' => true
        ],
      ],
  
      '083' => [ //FEISS
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => 'https://www.generationlighting.com/warranty'
        ],
  
      'MIL' => [ //MILLENNIUM
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => 'https://www.lightyourhome.com/product-warranties/Warranty_Millennium Lighting.pdf'
        ],
  
      'INV' => [ //INNOVATIONS
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => [
                'text' => '2 Year Warranty on Product Finish, Lifetime Warranty on Product Electrical',
            'nolink'   => true
            ],
        ],
  
      'Z' => [ //Z-LITE
          'shipping' => 'Ships in 2 to 3 Business Days',
          'warranty' => 'https://zlite-web.s3.amazonaws.com/warranty.pdf'
      ],

      '079' => [ //Maxim
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => 'https://www.maximlighting.com/warranty-info'
      ],
    
      '450' => [//ET2
        'shipping' => 'Ships in 2 to 3 Business Days',
        'warranty' => 'http://www.et2online.com/warranty-info'
      ]
  
    );
  
    //IF THE SKU CONTAINS "Q-","0-" or "Z-" FROM THE FIRST TWO CHARACTERS, IT IS QUIOZEL, SAVOY OR Z-LITE SO OUTPUT ITS ARRAY VALUE
  
    if ( substr($manufacturer_id, 0, 2) == 'Q-') {
  
      if ( $warranty == true ) {
  
        return $manufacturer_info['Q']['warranty'];
  
      } else {
  
        return $manufacturer_info['Q'];
  
      }
  
    } else if ( substr($manufacturer_id, 0, 2) == '0-') {
  
      if ( $warranty == true ) {
  
        return $manufacturer_info['0']['warranty'];
  
      } else {
  
        return $manufacturer_info['0'];
  
      }
  
    } else if ( substr($manufacturer_id, 0, 2) == "Z-") {
  
      if ( $warranty == true ) {
  
        return $manufacturer_info['Z']['warranty'];
  
  
      } else {
  
        return $manufacturer_info['Z'];
  
      }
  
  } else if ( substr($kichler_id, 0, 5) == '069-K' ) {
  
      if ( $warranty == true ) {
  
        if ( preg_match('/Outdoor/', $category_slug) ) {
  
          return $manufacturer_info['069-K']['warranty']['outdoor'];
  
        } else if ( preg_match('/Fans/', $category_slug) ) {
  
          return $manufacturer_info['069-K']['warranty']['fans'];
  
        } else {
  
          return $manufacturer_info['069-K']['warranty']['indoor'];
  
        }
  
      } else {
  
        return $manufacturer_info['069-K'];
  
      }
  
  } else if ( substr($kichler_id, 0, 5) == '069-E' ) {
  
     if ( $warranty == true ) {
  
       return $manufacturer_info['069-E']['warranty'];
  
     } else {
  
       return $manufacturer_info['069-E'];
  
     }
  
    } else {
  
      if ( $warranty == true ) {
  
        return $manufacturer_info[$manufacturer_id]['warranty'];
  
      } else {
  
        return $manufacturer_info[$manufacturer_id];
  
      }
  
    }
  
  } //END SHIPPING DURATION FUNCTION

endif;

