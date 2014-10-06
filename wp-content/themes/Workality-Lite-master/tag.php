<?php
	include_once("_header.php");
	$dontshow_sidebar = of_get_option('md_posts_sidebar');
?>

    <br class="clear">
    <div class="row searchpage">
<?php if ( have_posts() ) : ?>
        <h1 class="border-color">
<?php echo '<span>' . single_tag_title( '', false ) . '</span>'; ?>
        </h1>
<!-- <?php 
	// GET ITEMS
	//get_template_part( 'loop', 'item' ); 
?> -->
<?php
	while (have_posts()) : the_post();
?>
        <div class="search-item border-color">
          <a href="<?= the_guid()?>" class="img" title="">
            <?php the_post_thumbnail(); ?>
          </a>
          <h2 class="post-title"><a href="<?= the_guid()?>" title="<?=the_title()?>"><?=the_title()?></a></h2>
          <p><?=the_excerpt()?></p>
        </div>
<?php
	endwhile;
?>

<?php else : ?>
        <h1 class="border-color">
<?php _e( 'Nothing found for', 'dronetv' ); ?> <?php echo single_tag_title( '', false ); ?>
        </h1>
        <div class="noresults">
          <p><?php _e( 'Sorry, but nothing matched with this tag. <br>Please try to use search form : ', 'dronetv' ); ?></p>
<?php get_search_form(); ?>
        </div>
            
<?php endif; ?>
      </div>
<?php if(!$dontshow_sidebar) { ?>
        <div class="one-third column">
<?php get_template_part( 'sidebar', 'blog' ); ?>
        </div>
<?php } ?>
<?
	include_once("_footer.php");
?>
