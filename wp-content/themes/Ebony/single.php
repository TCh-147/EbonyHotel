<?php
    get_header();
?>

<div class="single-container">

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
        ?>

        <h1><?php the_title(); ?></h1>
        <div class="single-thumbnail">
            <?php 
                if ( has_post_thumbnail() ) 
                    { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail();
                    } 
            ?>
        </div>
        <p><?php the_content(); ?></p>

<?php        
	}
}
?>

</div>


<?php
    get_footer();
?>