<?php
/**
 * The template for displaying all single posts and attachments
 *
 * Note: we're using Posts for Daily WODs
 */

get_header(); ?>

<div id="primary" class="content-area">
        <div id="main" class="site-main" role="main">

        	<?php while ( have_posts() ) : the_post(); ?>

        	        <div class="page-header header-about header-slim-rj">
                            <div class="container">
                            </div>
                            <!--/.container-->
                	</div>
                	<!--/.page-header-->

                	<div class="page-section">
                		<div class="container">
                			<h1><?php the_title(); ?></h1>

                			<hr/>

                			<div class="row">
                				<div class="col-sm-6">
                                                        <div class="wod-content">
                					   <?php the_content(); ?>
                                                        </div>
                                                        <!--/.wod-content-->
                				</div>
                				<!--/.col-sm-6-->
                				<div class="col-sm-6">
                					<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/omnia-clean.jpg" alt="Olympic Lifts" style="width:100%" />
                				</div>
                				<!--/.col-sm-6-->	
                			</div>
                			<!--/.row-->	
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
