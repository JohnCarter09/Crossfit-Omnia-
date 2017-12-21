<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header">
		        <div class="main-head">
		            <div class="container">
		                 <div class="row">
		                    <div class="col-md-8 col-md-offset-2">
		                        <h1><strong>C R O S S F I T</strong></h1>
		                        <h1><strong>O M N I A</strong></h1>
		                        <div class="divider"></div>
		                        <p><h4 class="h4-white">Your Premier Crossfit Gym in Denver, CO</h4></p>
		                        <a href="https://jetdiesel.lpages.co/leadbox/142cb4b73f72a2%3A1677276f2946dc/5707648880082944/" class="btn btn-primary">Request Member Pricing</a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <!--/.page-header-->

			<section id="about" class="no-padding">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-6 section-text">
			                <div class="title title-left">
			                    <strong><h2>Crossfit Omnia: Brief History</h2></strong>
			                    <strong><h6>est. 2013</h6></strong>
			                    <div class="divider divider-sm"></div>
			                </div>

			                <p> From opening our doors in Denver in 2013, to competing at our second crossfit games last summer, we really have had an amazing journey.</p>
			                <p>Not only does CrossFit Omnia cater to the everyday athlete who wants to improve their overall physical, and mental, health, but it is also home to the 2017 13th Fittest Team in the World.</p>
			                <p> After a cinderella run at the 2016 CrossFit Games, CrossFit Omnia's team successfully made it back to the games in 2017.  After 6 days of competition in Madison, WI, CrossFit Omnia secured it’s place amongst the world's best athletes.
			                <p>No matter your experience or skill level, or what your fitness goals are, you have a home at CrossFit Omnia.</p>
			                <p>Come be a part of our team, come be a part of our story.</p>
			                </div>
			                <div class="col-md-6">
			                <img src="<?php echo get_template_directory_uri(); ?>/images/IMG_0449.jpg" class="img-responsive">
			            </div>
			        </div>
			    </div>
			</section>

			<!--- the beginning-->
	        <div class="testimonial-about">
	            <div class="mask">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-8 col-md-offset-2">
	                            <div class="single-testimonial">
	                                <p><a href="https://jetdiesel.lpages.co/leadbox/142cb4b73f72a2%3A1677276f2946dc/5707648880082944/" class="btn btn-primary btn-lg">Request More Information</a></p>
	                            </div>  
	                        </div> 
	                    </div>
	                </div>
	            </div>
	        </div>

		<?php endwhile; ?>

	</div>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
