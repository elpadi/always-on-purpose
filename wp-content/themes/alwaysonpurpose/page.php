<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php $custom_fields = get_post_custom();?>
        <!--Content-->
        <div id="content">
        
        	<div class="col quote">
            
                <center><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></center>
                
				<?php if(count($custom_fields['left-col-quote']) > 0){?>
                        <?php echo $custom_fields['left-col-quote'][0]?>
                <?php } ?>
            
            </div>
            
            <div class="col last">
                
                <h1 class="title"><strong><?php the_title(); ?></strong></h1>
                
                <?php the_content(); ?>
            
            </div>
            <div class="clear"></div>
        
        </div>
        <!--End Content-->
        <?php endwhile; // end of the loop. ?>
        
<?php get_footer(); ?>
