<?php
	include_once("_header.php");

	//the_content();
	//the_author();
?>

    <div id="post-list" class="row" style="margin-top:0px">
<?php
	query_posts('cat=8');
	//query_posts('cat=4');
	while (have_posts()) : the_post();

	$categories = get_the_category();
	if($categories){
		foreach($categories as $category) {
			$category_name = $category->cat_name;
		}
	}

	$thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>

        <div class="post-<?=the_ID()?> post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized blogpost border-color">
          <h3><a href="<?= the_guid()?>" data-type="blog" data-id="<?= the_ID()?>" data-token="2f67468a67"><?=the_title()?></a></h3>
          <div class="title border-color">
            <strong>Category :</strong> <?=$category_name?>
            · by minivertising
            <a href="javascript:fb_share('<?=the_title()?>','<?= the_guid()?>','<?=$thumb_url?>');"><img src="<?=$home?>/wp-content/themes/Workality-Lite-master/images/share.png"></a>
            <div class="fb-like" data-href="<?= the_guid()?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" style="overflow:hidden"></div>
			<!-- <input type="button" value="공유하기" onclick="javascript:fb_share('<?=the_title()?>','<?= the_guid()?>');"> -->
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

<div id="fb-root"></div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '769243006468432',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>

	function fb_share(title,url,thumb_url){
		FB.ui(
		  {
			method: 'feed',
			name: title,
			link: url,
			picture: thumb_url,
			caption: 'http://minivertising.cafe24.com',
			description: title
		  },
		  function(response) {
			if (response && response.post_id) {
				alert("공유 되었습니다.");
			}
		  }
		);
	}

</script>
