<?php
/*
Template Name: Contact
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

		<?php endwhile; ?>

	</div>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
