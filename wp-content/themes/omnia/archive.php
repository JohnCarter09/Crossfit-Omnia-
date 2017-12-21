<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="page-header header-about header-slim-rj">
            <div class="container">
            	<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
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

								<hr class="hr-30" />
						       
				                <label><?php the_time('F j, Y'); ?></label>
				                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				                <?php the_excerpt(); ?>
					
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
