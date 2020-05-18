
Light World Theme
===

Custom Theme for Light World's Website

Directories and File Locations
----------------------------

Table of Contents

- **Folders**
  - css
  - js
    - customizer.js
    - filter_overlay.js
    - lighting_ideas.js
    - lw-showroom.js
    - navigation.js
    - skip-link-focus-fix.js
    - slick_init.min.js
    - swatch_slider_1.0.js
    - tfs-product-remove.js
    - tfs_checkout_and_cart.js
    - woo_single_product.js
  - inc
    - woocommerce
      - shipping
        - single-product-shipping.php
      - tool-tips
        - single-product-tool-tips-information.php
      - woocommerce-admin-functions.php
      - woocommerce-functions.php
    - custom-breadcrumbs.php
    - custom-header.php
    - customizer.php
    - template-functions.php
    - template-tags.php
  - languages
  - layouts
  - template-parts
  - woocommerce
- **Root Files**
  - functions.php
  - style.css
  - template files
    - front-page templates
    - sale-page templates

Folders
--------

###### CSS
 
 This folder contains theme.css which is the old theme's style.css. This file is not currently enqueued but can be used in the future in case there are any styling issues.
 
###### js

  - **customizer.js**

    - Contains theme customizer enchancements, reloads preview changes async

  - **filter_overlay.js**

    - Contains js for the mobile product filter on woocommerce shop/product category pages

  - **lighting_ideas.js**

    - Handles product sliders and tip sliders on lighting ideas pages. Uses slick.js

  - **lw-showroom.js**

    - Handles jquery navigation scroll and sliders on light world showroom page

  - **navigation.js**

    - Handles default navigation in theme. Not currently used, may be removed in future.

  - **skip-link-focus-fix.js**

    - Helps with accessibility for keyboard only users

  - **slick_init.min.js**

    - minified version of slick_init.js - handles the initialization of all slick sliders on the site

  - **tfs-product-remove.js**

    - temporary fix for removing products in the cart from the old theme. May be removed in the future.

  - **tfs_checkout_and_cart.js**

    - temporary fix for removing products from cart via ajax from cart/checkout. May be removed in future.

  - **woo_single_product.js**

    - Handles all custom javascript on single product pages. Product thumbnail gallery, variable product summary, printing function,      chat with us button, variable product change handlers for tables, summary and links, and lastly tool tips.
    
  
###### inc
 
 Contains theme functions and other important theme php files. The woocommerce folder includes all of the custom woocommerce functions and edits for the theme.

 - ###### woocommerce

  - **shipping/single-product-shipping.php**

    - Contains the function responsible for outputting shipping and warranty information by manufacturer on the website

  - **tool-tips/single-product-tool-tips-information.php**

    - Contains the function responsible for holding and outputting tool tip data based on specific product attributes

  - **woocommerce-admin-functions.php**

    - Contains any customizations and changes to default woocommerce admin functionality. This includes custom meta fields, etc.

  - **woocommerce-functions.php**

    - Contains all customizations and changes to default woocommerce frontend functionality both via hooks and custom functions.
  

- **custom-breadcrumbs.php**

  - Contains the function responsible for outputting breadcrumbs on the desktop version of the theme.

- **custom-header.php**

  - Default file for displaying a custom header in the theme. Not currently used and may be deleted in the future.

- **customizer.php**

  - Adds additional customizer functionality for the theme such as enqueuing scripts to load customizer changes asynchronously.

- **template-functions.php**

  - Contains most functions in the theme that are called via hooks ( does not contain hooked functions related to woocommerce ).

- **template-tags.php**

  - Contains custom template tags for this theme


###### languages

Supported languages for the theme.
 
###### layouts

Layout css for the theme
 
###### template-parts
 
 Contains template part files for use with wp function get_template_part(). Includes content template part, page template part, post template part, and no results template part.
 
###### woocommerce
 
Contains all overridden woocommerce templates.
 
 
Root Files
----------

***NOTE: The root of the theme contains all custom theme template files and overridden wordpress templates***

###### functions.php

Contains all enqueued and dequeued files, as well as theme set up and required files. This file links the theme's backend together.

###### style.css

Contains all of the themes styles, including part of the old theme's css. It also contains Bootstrap Grid at the end of the file.

###### template files

All template files including front-page-(insert name).php and sale-page-(insert name).php are template files for their respective page listed in the file's name. These templates are then set in the admin area in the page editor.
