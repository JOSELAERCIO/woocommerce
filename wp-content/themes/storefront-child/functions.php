<?php 

function storefront_child_enqueue_styles() {

   $parent_style = 'storefront';
   
   wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'storefront-child', 
        get_stylesheet_directory_uri() . '/assets/css/woocommerce/woocommerce.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_styles' );

/**
 * Site branding wrapper and display
 *
 * @since  1.0.0
 * @return void
 */
function storefront_site_branding() {
    ?>
    <div class="site-branding">
        <?php get_template_part('assets/img/inline/logo-principal'); ?>
    </div>
    <?php
}

/**
 * Display storefront sidebar
 *
 * @uses get_sidebar()
 * @since 1.0.0
 */
function storefront_get_sidebar() {
    return;
}

/**
 * Display the theme credit
 *
 * @since  1.0.0
 * @return void
 */
function storefront_credit() {
    ?>
    <div class="site-info">
       Studio Pinoos | Arquitetura e Design <?php echo Date('Y'); ?> &#9400;	
    </div><!-- .site-info -->
    <?php
}

/**
 * Display Header Cart
 *
 * @since  1.0.0
 * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
 * @return void
 */

function storefront_header_cart() {
    return;
}

function storefront_product_search() {
    return;
}

/**
 * Change elements position header
 */

add_action('init', 'thmeme_child_change_header');

function thmeme_child_change_header() {
    remove_action( 'storefront_header', 'storefront_header_container_close',           41 );
    remove_action( 'storefront_header', 'storefront_product_search',                   40 );
    add_action( 'storefront_header', 'storefront_product_search',                      69 );
    add_action( 'storefront_header', 'storefront_header_container_close',              70 );
}

function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

/**
 * Sorting wrapper
 *
 * @since   1.4.3
 * @return  void
 */
function storefront_sorting_wrapper() {
    return;
}

/**
 * Sorting wrapper close
 *
 * @since   1.4.3
 * @return  void
 */
function storefront_sorting_wrapper_close() {
    return;
}

/* Remove field country */

function remove_field_billing_country( $fields ) {

   unset($fields['billing_country']);
   return $fields;
}
add_filter( 'woocommerce_billing_fields' , 'remove_field_billing_country' );

function remove_field_shipping_country( $fields ) {
    unset($fields['shipping_country']);
    return $fields;
}
add_filter( 'woocommerce_shipping_fields', 'remove_field_shipping_country' );

