<?php
/**
 * Displays the head section of the theme
 *
 * @package Lambda
 * @subpackage Frontend
 * @since 0.1
 *
 * @copyright (c) 2014 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php oxy_add_apple_icons( 'iphone_icon' ); ?>
        <?php oxy_add_apple_icons( 'iphone_retina_icon', '114x114' ); ?>
        <?php oxy_add_apple_icons( 'ipad_icon', '72x72' ); ?>
        <?php oxy_add_apple_icons( 'ipad_retina_icon', '144x144' ); ?>
        <link rel="shortcut icon" href="<?php echo esc_url(oxy_get_option( 'favicon' )); ?>">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="pace-overlay"></div>
        <?php oxy_create_nav_header(); ?>
        <div id="content" role="main">