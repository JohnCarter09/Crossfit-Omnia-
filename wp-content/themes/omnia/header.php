<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<!-- MAIN WP Head hook -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div class="site-header" id="header-img">
    <div class="container">
        <a href="#" class="header-mobile-navicon js-mobile-navicon"><span class="bars"></span></a>
        
        <a href="/" class="header-brand"><img src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png" /></a>
        
        <div class="header-nav-wrapper">
            <ul class="header-nav nav-left">
                <li><a href="/about/">About</a></li>
                <li><a href="/drop-in/">Drop In</a></li>
                <li><a href="/contact/">Contact</a></li>
            </ul>
            <ul class="header-nav nav-right">
                <li><a href="/schedule/">Schedule</a></li>
                <li><a href="/wods/">WOD Archive</a></li>
                <li><a href="#wod-modal" data-toggle="modal">Todays WOD</a></li>
            </ul>
        </div>
        <!--/.header-nav-wrapper-->
    </div>
    <!--/.container-->
</div>
<!--/.site-header-->
