# Change Log
All notable theme changes should be added to this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [ released ] - 12.4.2020

## [ 1.29.0 ]

## Added

- Elk lighting sale coupon to single product pages
- Elk home sale coupon to single product pages

## Changed

- Elk home sale on front page to coupon
- Elk home and lighting to coupon on sales page
- Home page sale banners
- Sale page sale banners

## Removed

- Currey and co sale from sale page
- Artcraft sale from sale page

## [ released ] - 11.30.2020

## Added

- Elk Home sale to sale page

## Removed

- Quoizel sale from front page
- Quoizel sale coupon from single product pages
- Removed livex sale from sale page

## [ released ] -  11.25.2020

## Changed

- Elk Home and Lighting Sale text

## Removed

- Elk home and lighting coupons from single product pages

## [ released ] - 11.25.2020

## [ 1.28.1 ]

## Added

- Livex lighting sale to sale page

## Changed

- ET2 and Maxim Lighting Sale text

## [ released ] - 11.24.2020

## [ 1.28.0 ]

## Changed

- Elk home sale to quoizel sale on home page
- updated Quoizel sale on sale page
- Home page sale banners
- Sale page banners
- Quoizel single product page coupon and logic

## [ released ] - 11.19.2020

## [ 1.27.4 ]

## Added

- Hudson Valley Sale to front page
- Hudson Valley Sale to sale page
- Mitzi Sale to Sale page
- Currey and Co. Sale to sale page

## [ released ] - 11.17.2020

## [ 1.27.3 ]

## Added

- Artcraft sale to sales page

## [ released ] - 11.16.2020

## [ 1.27.2 ]

## Added

- Elan sale to sales page

## [ released ] - 11.3.2020

## [ 1.27.1 ]

## Added

- Additional logic for displaying quoizel coupons (include certain categories, exclude others)

## Changed

- Quoizel sales on sale page
- Quoizel sale coupon on single product pages

## [ released ] - 11.1.2020

## [ 1.27.0 ]

## Added

- Maxim sale to sale page
- ET2 sale to sale page
- Kichler sale to sale page

## Removed

- Maxim outdoor lighting sale from sale page

## [ released ] - 10.29.2020

## [ 1.26.0 ]

## Added

- Quoizel Lighting Sale to Home Page
- Quoizel Lighting Sale to sale page
- Quoizel coupon code to single product pages

## Removed

- Elk Lighting Sale from Home Page
- Quoizel Table lamps and Floor Lamps sale from sale page

## [ released ] - 10.20.2020

## [ 1.25.0 ]

## Added

- Elk Lighting sale to home page

## Removed

- Kichler and Elan Sale from sale page
- Kichler sale from home page

## [ released ] - 10.16.2020

## [ 1.24.0 ]

## Removed

- Artcraft Sale from sale page

## [ released ] - 10.7.2020

## [ 1.23.0 ]

## Added

- Picture lights to hudson valley brand page template

## Changed

- Kichler sale wording

## [ released ] - 10.6.2020

## [ 1.22.0 ]

## Added

- Kichler sale to home page
- Kichler sale to sale page
- Elan sale to sale page
- Artcraft sale to sale page (commit releasing 10.6.2020)

## Removed

- Elk Lighting Sale from home page

## [ released ] - 10.1.2020

## [ 1.21.1 ]

## Fixed

- Maxim sale page link

## [ released ] - 10.1.2020

## [ 1.21.0 ]

## Added

- Elk Home sale to home page
- Outdoor Wall Lighting to Maxim brand page template
- Elk Home sale to sale page
- Quoizel Table and floors lamps sale to sale page


## Changed

- Maxim Lighting Sale on sale page
- Single product page coupon codes

## Removed

- Quoizel sale from home page
- Removed ET2 sale from sale page
- Quoizel All Sale from sale page

## [ released ] - 9.30.2020

## [ 1.20.2 ]

## Added

- .block-picture img to fix white space between images and titles

## Fixed

- White space in picture blocks

## [ released ] - 9.29.2020

## [ 1.20.1 ]

## Removed

- display flex from @media width 1366px .block-picture
- Display flex from lighting ideas row

## Fixed

- Block picture display bug on IOS tablet
- lighting ideas display bug on IOS tablet

## [ released ] - 9.29.2020

## [ 1.20.0 ]

## Added

- function brand_page_picture_blocks to dynamically output brand page category picture blocks
- New HVL product categories to HVL brand page

## Changed

- HVL brand page template to use function brand_page_picture_blocks

## [ released ] - 9.25.2020

## [ 1.19.1 ]

## Added

- Default padding and margin values for user agent stylesheet

## Fixed

- Fatal Error: undefined function is_plugin_active
- SEO JS accordions handler
- Mobile JS search handler
- CSS bug where mobile search icon and shopping cart were displaced

## [ released ] - 9.21.2020

## [ 1.19.0 ]

## Added

- Scroll into view functionality for sales page
- Automatic scroll into view for sales when entering sales page
- Scroll sales into view when clicking on sales page banner
- new google conversion tracking code

## Changed

- CSS selector for sale page banners

## [ released ] - 9.15.2020

## [ 1.18.0 ]

## Removed

- Comments section from blog posts

## [ released ] - 9.15.2020

## [ 1.17.1 ]

## Added

- Check for key 'wppp' in array $GLOBALS
- added check to function woo_overview_tab_content() for product page

## Changed

- Thumbnail gallery arrow margin on single product page on tablet landscape

## Removed

- old Post type share switch from header.php (leftover from old theme)

## Fixed

- PHP Warning: empty regex in preg_replace error woocommerce-functions.php 553
- PHP Warning: undefined index 'wppp' in array $GLOBALS
- PHP Notice: undefined property front_end from array $GLOBALS['wppp']
- PHP Notice:  Undefined variable: simple_product_image_url
- PHP Notice:  Undefined variable: post_type_share_switch in header.php
- PHP Notice:  Undefined variable: prodId
- PHP Notice:  Undefined variable: kichler_sku in single-product-shipping.php
- PHP Warning:  Illegal string offset 'text' in woocommerce-functions.php


## [ released ] 9.11.2020

## [ 1.17.0 ]

## Added

- trusted site "certified secure" badge to footer
- trusted site "secure checkout" badge to checkout

## Changed

- Function add_auth_seal to add_checkout_badges
- Sale Banners to fall sale

## Removed

- Artcraft sale
- Innovations Sale
- Maxim Lighting Sale due to pricing update

## [ released ] - 9.10.2020

## [ 1.16.3 ]

## Added

- check for installation, spec and warranty info to func change_variation_single_product_data in woo_single_product.js

## Fixed

- Bug where specification table for not display on variable products that are missing an installation sheet

## [ released ] 9.10.2020

## [  1.16.2 ]

## Added

- Added html sizes attribute to picture source tags for webp and jpeg in shop loop
- Srcset to simple prodcuct images in shop loop

## Changed

- Simple product image output to use wp_get_attachment_image_src with img tag instead of $product->get_image()

## Removed

- Inline sizing on shop loop variation images
- Inline sizing on shop loop simple product images

## Fixes

- Fixed scaled images not being displayed in shop loop

## [ released ]

## [ 1.16.1 ]

## Added

- New categories to currey and co. brand page template

## Changed

- ET2 and Maxim Lighting text in Sale page template

## Removed

- Hudson Valley and Mitzi from Sale page template

## [ released ]

## [ 1.16.0 ]

## Added

- Coupon codes to single product pages for Quoizel and Elk Lighting
- basic styling for single product page coupon message

## Changed

- Quoizel Sale text to 15% off
- Quoizel sale coupon codes

## [ released ]

## [ 1.15.3 ]

## Changed

- Maxim/ET2 sales to 20% off all
- Changed home page desktop sale banner

## [ released ]

## [ 1.15.2 ]

## [ released ]

## Added

- Elk Lighting Sale
- Innovations Sale

## Changed

- Quoizel Sale on Front Page text/image
- Maxim/ET2 Sales
- Mobile/Desktop sale banners on Home Page
- Mobile/Desktop sale banners on Sale Page

## Removed

- Elk Home Sale

## [ 1.15.1 ]

## Added

- Artcraft Wall Sconce and Outdoor Wall Light Sale to Sale Page

## [ released ] - 8.27.2020

## [ 1.15.0 ]

## Added

- Currey and Co. Base template
- Currey and Co. Shipping information (single product shipping)
- Currey and Co. Warranty information (single product shipping)
- Added Links and images to Currey and Co. Brand template
- Additional Dimension information for product diameter to single product page template
- Additional Dimension info for product sets to single product page template
- Currey and Co. to brand page template
- Brand page image to currey and co. parent category page

## [ released ]

## [ 1.14.7 ]

## Changed

- WooCommerce Cart template to current version

## [ released ]

## [ 1.14.6 ]

## Changed

- Elk Home Sale on home page to use coupon
- Elk Home Sale on sale page to use coupon

## Removed

- Artcraft sale from sale page
- Elk Lighting sale from sale page

## [ released ]

## [ 1.14.5 ]

## Added

- Elk Lighting Sale

## Changed

- Elk Home Sale to 20% off mapgit chec

## Removed

- Artcraft Lighting Sale
- Elk Lighting Sale

## [ released ]

## [ 1.14.4 ]

## Added

- Virtual Appointments banner to desktop and mobile

## [ released ]

## [ 1.14.3 ]

## Added

- Artcraft Sale to sale page

## [ released ] - 8.6.2020

## [ 1.14.2 ]

## Added

- Paypal logo to footer
- Additional custom product sorting options (display by stock, display by stock and availability was not compatible)

## Changed

- Inspiration and Designer collections bg color/margin
- Default product sorting in shop loop to sort by stock and popularity (in stock shows first)

## Fixed

- Variable "From" formatted pricing displaying in WooCommerce Admin area
- Single product review form text alignment

## [ released ] - 8.1.2020

## [ 1.14.1 ]

## Added

- Quoizel Ceiling Mount Sale (Home Page and Sale Page)
- Elk Home Sale (Home Page and Sale Page)
- ET2 Sale (Sale Page)
- Maxim Sale (Sale Page)
- PayPal Payment Method to footer

## Removed

- Quoizel Bath Sale (Home page and Sale Page)
- Elk Lighting Sale (Home Page and Sale Page)

## [ released ] 7.30.2020
 
## [ 1.14.0 ]

## Added

- Apple Pay support

## [ released ] - 7.30.2020

## [ 1.13.4 ]

## Fixed

- Positioning issues with single product thumbnail gallery increment/decrement arrows
- Styling issue with single product list descriptions
- Contact page store hours alignment/color

## [ released ] - 7.30.2020

## [ 1.13.3 ]

## Changed

- Price font size and alignment in shop loop
- Product title alignment in shop loop
- Color swatch size on mobile and left aligned
- Color swatch size on desktop
- Pagination size on mobile
- Amount of product columns in shop loop to 4 (desktop)

## Removed

- Picture border in shop loop
- Product title background color in shop loop

## Fixed

- Bug where SEO accordions would not open

## [ released ] - 7.24.2020

## [ 1.13.2 ]

## Changed

- Single Product spec tool tips positioning and logic on all devices
- Single product spec tools tips bg color
- Single product spec table heading font size on mobile
- Single product spec table heading width on mobile


## [ released ] - 7.23.2020

## [ 1.13.1 ]

## Changed 

- Picture blocks on desktop back to original (new layout is incompatible with webp plugin)
- Ipad landscape single product gallery arrow direction

## [ released ] - 7.23.2020

## [ 1.13.0 ]

## Added

- Navigation arrows to mobile sliders
- Minor layout adjustments to front page (home)
- Email sign up form on home page between Inspiration and Why Shop With Us
- Action hook for embedded email sign up
- Additional product variation url's to product loop color swatches
- New picture block layout to function get_recent_post_data()
- function create_picture_block to dynamically create picture blocks

## Changed

- Moved single product description to overview tab
- Moved add to cart button up on single product pages
- Add to cart button size on mobile
- Price range display on single products ( displays "to" as delimiter for price range instead of "-" )
- Price range display in shop loop ( From *insert price* instead of *price* - *price* )
- Logo Size on Desktop
- Pictures blocks layout/positioning to flex
- Moved picture blocks text to beneath picture container rather than overlay
- Changed picture block text size on Mobile
- Picture block html on all pages

## Removed

- Gallery thumbnails on mobile devices
- Borders under headings on home page

## Fixed

- Product Loop Swatch slider bug where variation urls were not changing

## [ released ] - 7.15.2020

## [ 1.12.6 ]

## Changed

- Elk Lighting Sale container column size

## [ released ] - 7.15.2020

## [ 1.12.6 ]

## Changed

- Logo sizes

## [ unreleased ] - 7.15.2020

## [ 1.12.5 ]

## Removed

- Kichler sale from sale page/front page
- Elan sale from sale page

## [ released ] - 7.14.2020

## [ 1.12.4 ]

## Added

- Paypal integration

## Changed

- Payment options styling

## Removed

- Paypal "credit cards accepted"

## [ released ] - 7.14.2020

## [ 1.12.3 ]

## Removed

- innovations sale

## [ released ] - 7.13.2020

## [ 1.12.2 ]

## Changed

- Checkout credit card input font size

## [ released ] - 7.13.2020

## [ 1.12.1 ]

## Changed

- Mobile Header Logo positioning

## [ released ] - 7.13.2020

## [ 1.12.0 ]

## Changed

- title background color in brand templates
- cart svg link
- woocommerce button text color

## [ released ] - 7.10.2020

## [ 1.12.0 ]

## Added

- Sticky navigation to all platforms (CSS and JS)
- WooCommerce single product tabs template
- class title-container/button-container to all page title containers
- Product dimensions to product summary

## Changed 

- Header layout
- Cart icon to SVG image
- Header styling
- Search icon size
- Logo to horizontal version
- Header, footer, button container colors
- Sale banners with new colors
- Header margin to auto
- fa icon hover color
- Wrapped single product tabs in anchor (makes tabs act as buttons)
- template-bucks-county.php to reflect ceiling lights/wall lights templates
- accordion styling

## Removed

- Row above header on mobile (free shipping with every order)
- Some inline styles from page templates

## [ released ]

## Changed 

- Sale banners on home page and sales page

## [ released ]

## [ 1.11.6 ]

## Changed 

- Quoizel Sale to 10% off

## [ released ]

## [ 1.11.5 ]

## Changed 

- Quoizel sale wording

## Removed 

- Artcraft sale

## [ released ]

## [ 1.11.4 ]

## Changed

- Quoizel sale on front page and sales page

## [ released ]

## [ 1.11.3 ]

## Changed

- Front page sale banners on mobile and desktop
- Sale page sale banners on mobile and desktop
- Front page quoizel sale image/description

## Removed

- Elk Home Sale

## [ released ]

## [ 1.11.2 ]

## Added

- Kichler and Elan lighting sales to sales and promotions

## Changed

- Elk Home sale on front page to Kichler sale

## [ released ]

## [ 1.11.1 ]

## Added

- Margin top to reset products button
- $(document).ajaxStop to fix javascript ajax error

## Changed

- Filter/shop responsive breakpoints on tablet portrait mode (removed d-lg-block)
- Open filter buttons from being hidden on mobile (dropdown arrows)
- Size of mobile product filter update filter button
- Query strings
- Theme version number

## Removed

- Bottom spacing on mobile product filter update filter button

## [ released ]

## [ 1.11.0 ]

## Added

- New media queries for ipad and ipad pro
- More responsive functionality/support to shop/product categories for tablet devices
- Reset button to filter overlay

## Changed

- Mobile Product filter styling
- Mobile product filter positioning
- Mobile product filter event listeners (open and close)
- Mobile Product filter javascript from vanilla to jquery
- Shop/product category structure on tablet and mobile
- Query strings
- Theme version number
- mobile_search_init.js to jquery
- Fixed mobile search toggle, wasn't showing up on mobile

## Removed

- Product filter from left side on ipad portrait/landscape and ipad pro portrait. Now uses mobile product filter
- Ajax start and stop handlers from filter_overlay.js
- GNU license

## [ released ]

## [ 1.10.2 ]

## Changed

- Fixed lighting ideas display issue

## [ released ]

## [ 1.10.1 ]

## Changed

- Fixed bug where header navigation would not display on mobile

## [ released ]

## [ 1.10.0 ]

## Added

- thankyou.php ( custom thank you page )

## Changed

- Conditions for displaying order details while not logged in ( woocommerce-functions.php )
- Front page tablet portrait mode layout
- Footer Navigation for mobile

## [ released ]

## [ 1.9.2 ]

## Changed

- Contact page covid update

## [ released ]

## [ 1.9.1 ]

## Added

- Artcraft Sale to sales and promotions

## [ released ]

## [ 1.9.0 ]

## Changed

- Elk Home and Lighting sales back to use coupons
- Contact page update

## Removed

- Kichler sale from home page
- Kichler and elan sale from sales and promotions

## [ released ]

## [ 1.8.0 ]

## Added

- Trust Site Script to footer.php (trusted site badge)
- Hotjar tracking script

## [ released ]

## [ 1.7.2 ]

## Added

- Category images for new parent product categories ( lamps, wall lights, ceiling lights )

## Changed

- Theme version number and style.css query string

## Removed

- Old parent category pictures (chandeliers, pendants,etc.)

## [ released ]

## [ 1.7.1 ]

## Added

- Inspiration to home decor landing page
- Margin bottom to see all inspiration on new landing pages

## Changed

- Bath and vanity link on wall lights landing page
- Heading for products on home decor and lamps landing pages

## [ released ]

## [ 1.7.0 ]

## Added

- Css class to filter checkboxes ( .style_filter_checkboxes )
- Css class to filter Finish Swatches ( .finish_filter_swatches )
- Labels to filter finish swatches
- Home Decor Page template
- Outdoor Lighting Page template
- Lamps template
- Brand page picture boxes to parent category landing pages
- New images to parent category landing pages

## Changed

- Style filter to use checkboxes
- Wall Lights template
- Ceiling lights template
- Home page category links

## Removed

- Text block and call to action in front page and sales page mobile templates

## [ released ]

## [ 1.6.1 ]

## Changed

- Kichler Sale image
- Popular Products shortcode
- Deals Link

## [ released ]

## [ 1.6.0 ]

## Added

- Sales to home page
- Popular products to home page
- product categories to home page

## Changed 

- Home page layout

## [ released ]

## [ 1.5.2 ]

## Changed

- Store Notice top position value

## [ released ]

## [ 1.5.1 ]

## Changed

- Elk Lighting and Elk Home sales
- Cart label to be a part of link

## [ released ]

## [ 1.5.0 ]

## Added

- Free Shipping text to single product pages
- CSS rule for sp free shipping
- custom action store-notice-header to header.php
- Cart label to header shopping cart
- orange horizontal rule for accents
- Open chat handler to header open chat

## Changed 

- Info and other links header positioning and styling
- Demo store notice color
- Bottom border color of header
- Theme version number
- Bootstrap container max-width for large screen sizes
- js and css query strings

## Removed

- demo store notice from action wp_footer
- Top header with "free shipping on all orders - hand picked selections - easy returns"

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
