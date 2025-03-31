<?php
    get_header();
?>



<h1>Welcome to The Ebony Manor Hotel</h1>

<div class="sidebar-grid">

	<div class="index-info">

		<img class="standard-img" src="<?php bloginfo('template_directory'); ?>/Images/index0.jpg">

		<p>
			Welcome to Ebony Manor, your luxurious retreat in the heart of Old Quebec, 
			Canada. Nestled amidst the historic charm of the city, our hotel offers a 
			perfect blend of elegance and comfort. Indulge in a rejuvenating experience 
			at our full-service spa, where skilled therapists await to pamper you with a 
			range of treatments designed to refresh your body and soul.
		</p>
		<p>
			Savor culinary delights at our exquisite restaurant, featuring a menu that 
			showcases the finest local ingredients and seasonal flavors. Whether you're 
			enjoying a romantic dinner or a casual meal with friends, our attentive staff 
			will ensure an unforgettable dining experience.
		</p>
		<p>
			Take a dip in our stunning indoor pool, where you can relax and unwind regardless 
			of the weather outside. The tranquil atmosphere is perfect for leisure and rejuvenation.
		</p>
		<p>
			As you explore the captivating streets of Old Quebec, you'll find yourself 
			surrounded by UNESCO World Heritage sites, charming boutiques, and vibrant cafes. 
			Don't miss the iconic Château Frontenac, the historic Plains of Abraham, and the 
			picturesque Petit Champlain district, all just a short walk from our doorstep.
		</p>
		<p>
			At Ebony Manor, we invite you to experience the perfect blend of luxury, 
			elaxation, and adventure. Come and create lasting memories with us!
		</p>

		<h1>The Latest Events</h1>

	<div class="recent-posts">
		<?php query_posts('cat=7') ?>
			<?php if( have_posts() ) : for ($x = 0; $x < 3; $x++){
			the_post();
		?>
			<div class="post">
				<a class="ent-recent-link" href="<?php the_permalink();?>">
					<div class="post-thumbnail">
						<?php 
							if ( has_post_thumbnail() ) 
							{ // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							} 
						?>
					</div>
					<div class="post-title">
						<h4>
							<?php the_title(); ?>
						</h4>
					</div>
				</a>
			</div>

		<?php 
			}
			endif;
		?>
		
</div>


	</div>

	<aside class="right-sidebar">
        <?php get_sidebar('sidebar-services'); ?>
    </aside>

</div>


<?php
    get_footer();
?>
