<?php /*
  Template Name: Trainers Template
 */ ?>

<?php get_header(); ?>

   <?php 

$wmodulepage = get_post_meta(get_the_ID(), 'wmodulepage', true);

?>


 <div class="pageInfo">
        
        <div class="container">
            
            <div class="eight columns pageTitle">
                
                <h1><?php the_title(); ?></h1>
                
            </div>
            
            <div class="eight columns breadcrumb">
               
               <?php my_breadcrumb(); ?>
                
            </div>
            
        </div>
        
    </div>

  <ul id="reset">
        
  <li><a class="reset" href="#" data-filter=".one-third">reset</a></li>


</ul>
    
<div class="featured"><?php if ( has_post_thumbnail()) : ?> <?php the_post_thumbnail(); ?><?php endif; ?> </div>
   <div class="pageContentWrapper">
        
        <div class="container">
        
        <div class="pageContent">
         <?php echo $post->post_content ?> </div>
        
            
                 <ul class="trainersPost dd_trainers_widget widget clearfix">
                        
                      
              
                     
                    <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$arguments = array(
    'post_type' => 'post_trainers',
    'post_status' => 'publish',
    'paged' => $paged
);

$trainers_query = new WP_Query($arguments);

dd_set_query($trainers_query);


?>
                     
                       <?php if ($trainers_query->have_posts()) : while ($trainers_query->have_posts()) : $trainers_query->the_post(); ?>
                      
                        <li <?php post_class('one-third column'); ?>>
                            
                              <?php 

$thumbimg = get_post_meta(get_the_ID(), 'thumbimg', true);

?>
                            
                            <div class="wrapper">
                                
                                
                                <?php if( $thumbimg) { ?>
                                
                                  <div class="postThumb"><img src="<?php echo $thumbimg; ?>" alt="" /></div>
    
      <?php } ?>
                                
                             <?php 

$contactemail = get_post_meta(get_the_ID(), 'contactemail', true);


?>   
                            
                            <div class="postDetails">
                                
                                <a href="<?php the_permalink(); ?>" class="postTitle"><h1><?php the_title(); ?></h1></a>
                                <?php the_content(); ?>
                                 <?php if( $contactemail) { ?>
                        
                        <a class="button-small-theme rounded3" href="mailto:<?php echo $contactemail; ?>"><?php _e('CONTACT', 'localization'); ?> <?php
$title = get_the_title(); // This must be!, because this is the return - the_title would be echo
$title_array = explode(' ', $title);
$first_word = $title_array[0];

echo $first_word;
?></a>
                           
                                    <?php } ?>
                                 

                            </div>
                                
                            </div>
                            
                        </li>
                        
           
      <?php endwhile; ?>
                    
                

<?php endif; ?>
                     
                 </ul>

                 
        <?php
                            kriesi_pagination();

                            dd_restore_query();
?>                  
                 

                


            
        </div>
        
    </div>

 <?php if ( $wmodulepage == 'yes') { ?>

<div class="widgetModuleWrapper">
        
    <ul class="widgetModule container clearfix">
        
          <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Widgetized Module")) ; ?>
        
    </ul>
    
</div>

        <?php } ?>

<?php get_footer(); ?>

    