<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="metric">
                    <span class="metric-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    <span class="metric-label">Email</span>
                    <span class="metric-value"><a href="mailto:Info@crossfitomnia.com">Info@crossfitomnia.com</a></span>
                </div>
                <!--/.metric-->
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="metric-icon"><i class="fa fa-compass" aria-hidden="true"></i></span>
                    <span class="metric-label">Address</span>
                    <span class="metric-value"><a href="https://www.google.com/maps/place/CrossFit+Omnia/@39.699988,-104.999663,15z/data=!4m5!3m4!1s0x0:0x63d310cdf18ae936!8m2!3d39.699988!4d-104.999663?sa=X&ved=0ahUKEwij85jXgPHXAhUC2WMKHbrSDboQ_BIIfzAM" target="about_blank">901 S. Jason St. Unit C <br>
                        Denver, CO 80223</a></span>
                </div>
                <!--/.metric-->
            </div>
            <div class="col-md-4">
                <div class="metric">
                    <span class="metric-icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                    <span class="metric-label">Phone</span>
                    <span class="metric-value"><a href="tel:720-449-2348">720-449-CFIT</a></span>
                </div>
                <!--/.metric-->
            </div>
        </div>
        <!--/.row-->

        <hr/>

        <?php echo do_shortcode('[contact-form-7 id="2936" title="Footer Contact Form"]'); ?>
    </div>
    <!--/.container-->
</section>
<!--/#contact-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="social">
                    <li class="wow bounceIn"><a href="https://www.facebook.com/CrossfitOmnia/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="wow bounceIn" data-wow-delay="0.1s"><a href="https://twitter.com/crossfitomnia?lang=en" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="wow bounceIn" data-wow-delay="0.5s"><a href="https://www.instagram.com/crossfitomnia/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
                 <p>Visit The<a href="https://journal.crossfit.com/" class="journal" target="_blank"> Crossfit Journal </a></p>
                 <p>Website Created by <a href="https://memberdev.com/" class="MemberDev" target="_blank"> MemberDev.com</a> | Copyright <?php echo date('Y'); ?></p>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="wod-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crossfit Omnia Work out of the Day</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--/.modal-header-->
            <div class="modal-body">
            	<?php
            		// get latest post for WOD
                    $post_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1
                    );
				    $post_query = new WP_Query( $post_args );

                    if ( $post_query->have_posts() ) :
				?>
                    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					   <?php the_content(); ?>
                    <?php endwhile; ?>

                    <?php wp_reset_query(); ?>
				<?php endif; ?>
            </div>
            <!--/.modal body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <!--/.modal-footer-->
        </div>
        <!--/.modal-dialog-->
    </div>
    <!--/.modal-fade-->
</div>
<!--/.modal-->
                            
<script data-leadbox="142cb4b73f72a2:1677276f2946dc" data-url="https://jetdiesel.lpages.co/leadbox/142cb4b73f72a2%3A1677276f2946dc/5707648880082944/" data-config="%7B%7D" type="text/javascript" src="https://jetdiesel.lpages.co/leadbox-1509708648.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/omnia.js" type="text/javascript"></script>

<!-- Main WP Hook -->
<?php wp_footer(); ?>

</body>
</html>
