<?php
 
/**
 * @package WordPress
 * @subpackage Kassyopea
 * @since Kassyopea 1.0
 */
 
/*
Template Name: Portfolio Page
*/
?>

<?php get_header() ?>                
            
        </div>                   
        
		<?php clear('border-header') ?>
                           
    </div>
    <!-- END HEADER -->                    
		
	<?php $layout = get_layout_page(); ?>   
	
	<!-- START CONTENT -->    
    <div id="content">
        <div class="inner layout-<?php echo $layout ?>">                   
        
        	<?php get_template_part( 'title', 'slogan' ) ?>     
			
			<?php get_template_part( 'accordion-slider' ) ?>
			
			<?php 
				if( !$type_bl_portfolio = get_post_meta( get_current_ID(), 'portfolio_type', true ) )
					$type_bl_portfolio = get_option( 'bl_portfolio_type', '3columns' );
			?>
            
			<!-- START HENTRY -->                     
            <div class="hentry">                          
            	<?php get_template_part('loop', 'page') ?>
            	
            	<?php if( get_option( 'bl_panel_portfolioshow' ) ) get_template_part( 'portfolio', $type_bl_portfolio ) ?>       
        
            	<?php comments_template(); ?>     
            </div>               
            <!-- END HENTRY -->      
            
            <?php if( $layout != 'sidebar-no' ) get_sidebar() ?>      
			
			<?php clear() ?>     
			
			<?php clear( 'space' ) ?>   
            
        </div>
    </div>  
    <!-- END CONTENT --> 
        
<?php get_footer() ?>
