<?php      
/**
 * @package WordPress
 * @subpackage Kassyopea
 * @since Kassyopea 1.0
 */
 
/*
Template Name: Home Store
*/                     

$slider_show = get_option( 'bl_slider_show' );
$section_show = get_option( 'bl_grey_section_show' );
$testimonial_show = get_option( 'bl_testimonial_slider_show' ); 

global $yiw_layout;
$yiw_layout = get_layout_page();

get_header() ?> 

			<!-- START SLIDER -->
            <?php if( $slider_show AND !is_paged() ) get_template_part( 'slider', get_option( 'bl_slider_type', 'home' ) ) ?>       
            <!-- END SLIDER -->             
		
			<?php do_action( 'yiw_after_render_slider' ) ?>    
            
        </div>           
        
		<?php if( !$slider_show AND !$section_show OR $testimonial_show ) clear('border-header') ?>
                           
    </div>
    <!-- END HEADER -->                     
            
    <?php clear() ?>
            
    <?php if( $section_show AND !is_paged() ) get_template_part( 'home', 'greysection' ) ?>
                                  
    <?php if( $testimonial_show AND !is_paged() ) get_template_part( 'home', 'testimonialslider' ) ?>          
    
    <!-- START CONTENT -->
    <div id="content">
    
        <div class="inner wpsc layout-<?php echo $yiw_layout ?> post-<?php echo get_current_ID() ?>">                           
        
        	<?php get_template_part( 'title', 'slogan' ) ?>     
			
			<?php get_template_part( 'accordion-slider' ) ?>   
		
			<?php do_action( 'yiw_before_hentry' ) ?>   
			<?php do_action( 'yiw_before_hentry_' . get_current_pagename() ) ?>            
            
            <!-- START HENTRY -->
            <div class="hentry">
            	<?php get_template_part('loop', 'page') ?>
            </div>               
            <!-- END HENTRY -->                        
            
            <!-- START SIDEBAR -->
            <?php if( $yiw_layout != 'sidebar-no' ) get_sidebar() ?>  
            <!-- END SIDEBAR -->       
            
    		<?php clear() ?>	      
			                                             
            <!-- START EXTRA CONTENT -->
        	<?php get_template_part( 'extra-content' ) ?> 
            <!-- END EXTRA CONTENT -->              
            
    		<?php clear() ?>	
            
        </div>               
            
    	<?php clear('space') ?>
    
    </div>
    <!-- END CONTENT -->    
    
<?php get_footer() ?>