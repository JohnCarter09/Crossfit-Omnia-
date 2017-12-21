<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header header-about header-slim-rj">
	            <div class="container">
	            	<h1>404 Error</h1>
	            </div>
	            <!--/.container-->
        	</div>
        	<!--/.page-header-->

        	<div class="page-section">
        		<div class="container">
					<p class="headline">Sorry... nothing was found at this location.</p>
					<p><a href="/">Return to Homepage</a></p>
				</div>
	            <!--/.container-->
        	</div>
        	<!--/.page-section-->	

		<?php endwhile; ?>

	</div>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
