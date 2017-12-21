<?php
/*
Template Name: Schedule
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-header header-schedule">
	            <div class="main-head">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-8 col-md-offset-2">
	                            <p><h1><strong>Classes that fit your schedule</strong></h1>
	                            <div class="divider"></div></p>
	                               
	                                    
                                    <!-- Button for modal -->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                 <strong>VIEW SCHEDULE</strong>
                              </button>
                              <a href="https://crossfitomnia.pike13.com/welcome" target="_blank" type="button"  class="btn btn-primary-waiver">
                                 <strong>Sign a Waiver</strong>
                              </a>

                                <!--/.cdivider-->
                            </div>
                            <!--/.col-md-8 col-md-offset-2-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.Container-->
                </div>
                <!--/.Main-head-->
            </div> 
            <!--/.page-header header schedule-->

		<?php endwhile; ?>

	</div>
	<!--/.site-main-->
</div>
<!--/.content-area-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crossfit Omnia Class schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--/.modal-content-->
            <div class="modal-body">
                <ul>
                    <strong><li>Crossfit Classes Monday - Friday</li></strong>
                    <li>5:15 - 6:15am</li>
                    <li>6:15 - 7:15am</li>
                    <li>7:15 - 8:15am</li>
                    <li>9:00 - 10:00am</li>
                    <li>12:00 -1:00pm</li>
                    <li>4:00 - 5:00pm</li>
                    <li>5:00 - 6:00pm</li>
                    <li>6:00 - 7:00pm</li>
                    <li>7:00 - 8:00pm* (Only Mon-Thurs)</li>
                </ul>
                 <ul>
                    <strong><li>** Saturday Crossfit Classes **</li></strong>
                    <li>7:30 - 9:00 AM Competitors Class</li>
                    <li>9:00 - 10:00 AM Free Class</li>
                    <li>10:00 AM - 12:00 PM Open Gym</li>
                </ul>
                <ul>
                    <strong><li>** Sunday **</li></strong>
                    <li>9:00 - 11:00 AM Open Gym Only</li>
                    <p></p>
                    <strong><li>** Speciality Classes ** </li></strong>
                    <li><strong>Skills Class</strong> every Tuesday @ 6 - 7 PM</li>
                    <li><strong>Yoga Class</strong> Every Tues-Thurs from  8:00 - 9 PM & Sundays from 8:00-9:00am</li>
                    <li><strong>Olympic Lifting Class</strong> every Thursday @ 5:30 - 7 PM</li>
                    <p></p>
                </ul>
                <ul>
                    <strong><li>We Require an elements course for everyone new to CrossFit or anyone that has started less than 6 months prior to today. Email RJ below for our elements course schedule.</li></strong>
                    <address href="info@crossfitomnia.com">Info@CrossfitOmnia.com</address>
                </ul>
            </div>
            <!--/.modal body-->
            <div class="modal-footer">
                <a href="https://crossfitomnia.pike13.com/welcome" target="_blank" type="button" class="btn btn-primary-send">Fill Out a Waiver</a>
                <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
            </div>
            <!--/.modal-footer-->
        </div>
        <!--/.modal-content-->    
    </div>
    <!--/.modal-dialog-->
</div>
<!--/.modal-->

<?php get_footer(); ?>
