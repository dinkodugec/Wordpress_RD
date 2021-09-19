<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>

<div id="divContentSection3Wrap">
		<div id="divContentSection3">
			
         <?php
	           while (have_posts()):
                 the_posts();
         ?>


			<div class="gridCol2">
			<?php if ( has_post_thumbnail() ) : ?>
             <?php the_post_thumbnail(); ?>
                <?php else: ?>
				<img src="https://via.placeholder.com/350">
	   
            <?php endif; ?>
				
			</div>
			<div class="gridCol2 gridLastItem">
        	<div><?php the_content(); ?></div>
				<a href="/wordpress"> >Povratak</a>
			</div>
			  <?php endwhile; ?>
			<div style="clear: both;"></div>
		</div>

 <?php get_footer();
