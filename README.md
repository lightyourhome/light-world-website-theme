
Light World Theme
===

Custom Theme for Light World's Website

Directories and File Locations
----------------------------

Table of Contents

- Folders
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
        -single-product-tool-tips-information.php
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
- Root Files
  - functions.php
  - style.css
  - template files
    - front-page templates
    - sale-page templates

Folders
--------

###### CSS
 
 This folder contains theme.css which is the old theme's style.css. This file is not currently enqueued but can be used in the future in case there are any styling issues.
 
###### inc
 
 Contains theme functions and other important theme php files. The woocommerce folder includes all of the custom woocommerce functions and edits for the theme.
 
###### languages

Supported languages for the theme.
 
###### layouts

Layout css for the theme
 
###### template-parts
 
 Contains template part files for use with wp function get_template_part(). Includes content template part, page template part, post template part, and no results template part.
 
###### woocommerce
 
Contains all overriden woocommerce templates.
 
 
Root Files
----------

***NOTE: The root of the theme contains all custom theme template files and overridden wordpress templates***

###### functions.php

Contains all enqueued and dequeued files, as well as theme set up and required files. This file links the theme's backend together.

###### style.css

Contains all of the themes styles, including part of the old theme's css. It also contains Bootstrap Grid at the end of the file.

###### template files

All template files including front-page-(insert name).php and sale-page-(insert name).php are template files for their respective page listed in the file's name. These templates are then set in the admin area in the page editor.
