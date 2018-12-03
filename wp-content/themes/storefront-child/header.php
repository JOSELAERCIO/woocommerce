<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header-top">
        <?php get_template_part('assets/img/inline/logo-principal'); ?>
        <?php wp_nav_menu( $args = array(
            'container' => 'nav',
            'container_class' => 'menu-principal-container',
            'menu_class' => 'menu-principal',
            'menu_id' => 'menu-principal'
        )); ?>
    </header>
