<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
	            	<h1><?php the_title(); ?></h1>
	            </div>
	            <!--/.container-->
        	</div>
        	<!--/.page-header-->

        	<div class="page-section">
        		<div class="container">
        			<?php the_content(); ?>
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
