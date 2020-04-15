<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Urban_Clothing
 */

?>
<style>
    .thumbmail-blog img{
        width:100% !important;
    }
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="thumbmail-blog">
                    <?php urban_clothing_post_thumbnail(); ?>
                </div>
                <a href="<?php the_permalink(); ?>"><?php echo '<h1 class="text-center">'.get_the_title().'</h1>';?></a>
               
               <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
