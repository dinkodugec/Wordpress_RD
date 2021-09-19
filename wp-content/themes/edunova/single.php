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
			<h1 class="SectionTitle1">Istaknute novosti</h1>
         <?php
	          $counter = 1;
              while (have_posts()):
                 the_posts();
         ?>


			<div class="gridCol3 <?php if($counter%3==0) echo 'gridLastitem'; ?>">
			<?php if ( has_post_thumbnail() ) : ?>
             <?php the_post_thumbnail(); ?>
                <?php else: ?>
				<img src="https://via.placeholder.com/350">
	   
            <?php endif; ?>
				<h2><?php the_title(); ?></h2>
				<div><?php the_content(); ?></div>
				<a href="<?php the_permalink(); ?>" >Procitajte više</a>
			</div>
			  <?php endwhile; ?>
			<div style="clear: both;"></div>
		</div>

 <?php get_footer();
