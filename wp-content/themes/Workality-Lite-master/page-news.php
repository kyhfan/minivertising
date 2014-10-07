<?php
	include_once("_header.php");

	//the_content();
	//the_author();
?>

    <div id="post-list" class="row" style="margin-top:0px">
<?php
	query_posts('cat=8');
	while (have_posts()) : the_post();

	$categories = get_the_category();
	if($categories){
		foreach($categories as $category) {
			$category_name = $category->cat_name;
		}
	}
?>

        <div class="post-<?=the_ID()?> post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized blogpost border-color">
          <h3><a href="<?= the_guid()?>" data-type="blog" data-id="<?= the_ID()?>" data-token="2f67468a67"><?=the_title()?></a></h3>
          <div class="title border-color">
            <strong>Category :</strong> <?=$category_name?>
            · by minivertising
          </div>
          <a href="<?=the_guid()?>" data-type="blog" data-id="<?=the_ID()?>" data-token="2f67468a67">
<?php
	if (has_post_thumbnail())
	{
            the_post_thumbnail('medium');
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
    </div>
<?php
	include_once("_footer.php");
?>
