<?php
/**
 * The main template file
 *
 * Note: We're using this for the WOD archive
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="page-header header-about header-slim-rj">
            <div class="container">
            	<h1>WOD Archive</h1>
            </div>
            <!--/.container-->
        </div>
        <!--/.page-header-->

        <div class="page-section section-light section-color-white" id="intro">
    		<div class="container">
    			<div class="row">
					<div class="col-sm-8">
						<?php if ( have_posts() ) : ?>

							<?php while ( have_posts() ) : the_post(); ?>
						       
				                <label><?php the_time('F j, Y'); ?></label>
				                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				                <?php the_excerpt(); ?>

				                <hr class="hr-30" />
					
							<?php endwhile; ?>

							<?php wp_pagenavi(); ?>

						<?php else : ?>

							<div class="alert alert-info">
								<p>No posts to display...</p>
							</div>
							<!--/.alert-->	

						<?php endif; ?>
					</div>
					<!--/.col-sm-8-->
					<div class="col-sm-4">
						<?php get_sidebar(); ?>
					</div>
					<!--/.col-sm-4-->	
				</div>
				<!--/.row-->	
			</div>
			<!--/.container-->
		</div>
		<!--/.page-section-->		

	</div>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
