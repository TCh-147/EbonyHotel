<?php
/**
* Template Name: Entertainment Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
    get_header();
?>

<h1>Entertainment</h1>

<div class="ent-post-container">
	<?php query_posts('cat=7'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="ent-post">
			<a class="ent-link" href="<?php the_permalink();?>">
				<div class="ent-title">
					<h4>
						<?php the_title(); ?>
					</h4>
				</div>
				<div class="ent-thumbnail">
					<?php 
						if ( has_post_thumbnail() ) 
						{ // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail();
						} 
					?>
				</div>
				<div class="ent-summary">
					<!-- shows only a part of the content. It will saty underlined nothing works to change it-->
					<?php 
						the_excerpt();
					?>
				</div>
			</a>
		</div>

	<?php 
		endwhile;
		endif;
	?>

</div>

<?php
	get_footer();
?>