<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage AngularWP
 * @since 11/6/2014
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> ng-app="app">
<!--<![endif]-->
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/public/js/html5.js"></script>
        <![endif]-->
        <script src="<?php echo get_template_directory_uri(); ?>/public/js/angular.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/public/js/angular-ui-router.min.js"></script>
        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div data-ui-view="container">