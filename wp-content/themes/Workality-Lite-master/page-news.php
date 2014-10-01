<?php
	include_once("_header.php");

	query_posts('cat=7');
	//the_content();

?>
    <div class="works-single hidden"></div>
    <br class="clear">

    <div id="post-list" class="row blogpage fitvids">
      <div class="sixteen columns">
<?php
	while (have_posts()) : the_post();
?>

        <div class="post-<?=the_ID()?> post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized blogpost border-color">
          <h3><a href="<?= the_guid()?>" data-type="blog" data-id="<?= the_ID()?>" data-token="2f67468a67"><?=the_title()?></a></h3>
          <div class="title border-color">
            <strong>Category :</strong> <a href="http://minivertising.cafe24.com/?cat=1" rel="category"><?=the_category(' ')?></a> 
            · <a href="<?= the_guid()?>#comments"><?=comments_number( 'no comments', 'one comments', '% comments' );?></a>
            · by <a href="http://minivertising.cafe24.com/?author=1" title="Posts by minivertising" rel="author"><?=the_author()?></a>
          </div>

          <a href="<?=the_guid()?>" data-type="blog" data-id="<?=the_ID()?>" data-token="2f67468a67">
<?php
	if (has_post_thumbnail())
	{
?>
            <img width="305" height="230" src="<?=the_post_thumbnail();?>" class="postThumb wp-post-image" alt="<?=the_title()?>" title="<?=the_title()?>" />
<?php
	}else{
?>
            <img width="305" height="230" src="<?=$home?>/wp-content/themes/Workality-Lite-master/images/no-image.jpg" class="postThumb wp-post-image" alt="<?=the_title()?>" title="<?=the_title()?>" />
<?php
	}
?>
          </a>
          <p><?=the_excerpt()?></p>
        </div>
<?php
	endwhile;
?>
        <div class="navigation-bottom">
        </div>
      </div>
    </div>
<?php
	include_once("_footer.php");
?>