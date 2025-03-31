<?php
/**
* Template Name: Rooms Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
    get_header();
?>

<h1>Rooms</h1>

<form class="rooms-form" action="#" method="post">
    <label for="room-type">Type: </label>
    <select name="room-type" id="room-type">
        <option value="all" selected>All</option>
        <option value="single" >Single</option>
        <option value="double" >Double</option>
    </select>
    <input type="submit" name="search" value="Search">
</form>

<div class="rooms-container">

    <?php

        query_posts('cat=6');
        if(isset($_POST['search'])){
            $type = $_POST["room-type"];

            switch($type){
                case "single": query_posts('cat=4');
                    break;
                case "double": query_posts('cat=5');
                    break;
                default: query_posts('cat=6');
                    break;
            }
        }

    ?>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="rooms-post">
        <a class="room-link" href="<?php the_permalink();?>">
            <div class="room-title">
                <h4>
                    
                    <?php the_title(); ?>
                </h4>
            </div>
            <div class="room-thumbnail">
                <?php 
                    if ( has_post_thumbnail() ) 
                    { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail();
                    } 
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