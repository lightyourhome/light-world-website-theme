# Change Log
All notable theme changes should be added to this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [ released ]

## [ 1.4.4 ]

## Add

- Candle Sconces category to Uttermost brand page

## [ released ]

## [ 1.4.3 ]

## Added 

- More product categories to Uttermost brand page
- Kichler sale to Sales and Promotions page

## [ released ]

## [ 1.4.2 ] - 6.10.2020

## Changed

- Uttermost brand page decorative bowls and trays url

## [ released ]

## [ 1.4.1 ] - 6.10.2020

## Added

- Additional product categories to Uttermost Brand Page

## [ released ]

## [ 1.4.0 ] - 6.8.2020

## Added

- New product categories to Uttermost brand page
- MPN, GTIN and UPC custom fields to woocommerce product variations

## Changed

- Uttermost product category ID in function categoryPageImages ( woocommerce-functions.php )

## [ released ]

## [ 1.3.0 ] - 6.5.2020

## Add

- Check in content-single-product.php to see if a product has tags ( added due to uttermost products )
- Check in content-single-product.php to see if a product has a finish attribute ( added due to uttermost products )

## [ released ]

## [ 1.2.3 ] - 6.2.2020

## Added

- Check to see if product is simple in function woo_product_variation_availability in woocommerce-functions.php ( fixes quick view simple product avail error )

## [ released ]

## [ 1.2.2 ] - 6.1.2020

## Changed

- Sale page template quoizel picture

## [ released ]

## [ 1.2.1 ] - 6.1.2020

## Added

- Elk Lighting Sale

## Changed 

- Innovations and Quoizel Sales
- Innovations images

## [ released ]

## [ 1.2.0 ] - 5.29.2020

## Added

- function woo_product_variation_availability now returns product avail JSON to be used in variable.php
- Product variation availability JSON to variation selection form
- function change_single_product_variation_stock_html to handle product variation stock messages in woo_single_product.js
- stock.php template from woocommerce plugin template files ( override) 
- Additional out of stock messages if availability date is empty

## Removed 

- Product variation stock messages from stock.php

## [ released ]

## [ 1.1.4 ] - 5.29.2020

## Changed

- Removed artcraft from sale page template
- Readded Mitzi and Hudson Valley Sale

## [ unreleased ]

## [ 1.1.3 ] - 5.28.2020

## Added

- function woo_product_variation_availability to handle in stock/out of stock messages for product variations

## Changed

- function woo_custom_product_availability to woo_simple_product_availability
- function woo_simple_product_availability to only support simple product stock messages

## [ released ]

## [ 1.1.2 ] - 5.27.2020

## Changed

- Sale page: removed Mitzi Sale

## [ released ] 

## [ 1.1.1 ] - 5.26.2020

## Added

- New Sale Page template for ET2 and Maxim sale update

## [ released ]

## [ 1.1.0 ] - 5.22.2020

## Added 

- Custom meta fields for product variation availability dates

## [ released ]

## [ 1.0.7 ] - 5.22.2020

## Changed 

- Font size for arrows on thumbnail slider mobile
- style.css query string
- theme version number

## Added

- "Product may be on backorder. Contact us for more information!" to out of stock message
- Refactored woo_custom_get_availability(), code is stale

## [ released ]

## [ 1.0.6 ] - 5.22.2020

## Changed

- Single product "chat with us" button to open new chat window ( uses tidio api open() method )
- Font size of "Why Shop With Us" icons on home page
- Query strings for style.css and woo_single_product.js
- Theme version number in style.css
- Discount percentage for ET2 and Maxim on sale page

## [ released ]

## [ 1.0.5 ] - 5.21.2020

## Added

- Fix for print images in woo_single_product.js ( simple and variable products )
- Print css to remove footer from print document
- Filter that removes single product additional information heading to woocommerce-functions.php

## Changed 

- Print css paragraph font size
- Refactored window.onbeforeprint and window.onafterprint code in woo_single_product.js
- Print css body height ( it was cutting off the print footer )
- Query strings for style.css and woo_single_product.js

## Removed

- Print CSS that was inhibiting multiple pages in print window

## [ released ]

## [ 1.0.4 ] - 5.20.2020

## Added

- margin-block-start: 0 to paragraph tags

## Changed

- Top header row on mobile to say "Free shipping on all orders"

## [ released ]

## [ 1.0.3 ] - 5.20.2020

## Added

- Text align left for SEO accordion read more
- SEO Accordion to showroom and wall lights pages
- Padding to page accordions paragraphs ( not product categories )
- Text align left for SEO accordion paragraphs on page templates containg them
- List styling for SEO accordions

## Changed

- SEO content on pages with existing accordions ( except home )
- SEO content HTML markup
- Lighting ideas text on home page
- Home page "why shop with us?" text
- "hand picked" typo in header
- Store bio on showroom page
- Slightly changed "design help" text for showroom

## [ released ]

## [ 1.0.2 ] - 5.18.2020

## Added

-New sale page template for Elk Home/Elk Lighting sale updates

## Changed

-Artcraft sale added to Sale page

## [ released ]

## [ 1.0.1 ] - 5.15.2020

## Added

- New sale page with Hudson Valley Removed ( sale-page-template-hvl-end.php )

## Changed

- Footer credit cards positioning on mobile
- Footer social media icons positioning on mobile
- Added comments to 1SEO requested page template files for page sections

## [ released ]

## [1.0.0] - 5.14.2020

### Added

- New Cart Layout and Styling
- New Checkout Layout and Styling
- New Product page layout and styling
- General typography and styling changes to site

### Changed

- Checkout page layout and styling
- Cart page layout and styling
- Product page layout and styling
- New and Trending page picture boxes
- Dequeued old theme.css file
- Removed most PHP functions from functions.php file
- Reorganized code base
  - style.css is reorganized and formatted
  - All PHP functions have been reorganized into different files. See README.md

### Removed 

- file rtl.css
- file readme.txt
