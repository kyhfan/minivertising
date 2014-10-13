<?php
	include_once("_header.php");

	//the_content();
	//the_author();
	//add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 480, 200 );
	add_image_size('custom-size', 480, 200, true );
?>

    <div id="post-list" class="row sixteen columns" style="margin-top:0px">
<?php
	query_posts('cat=7');
	//query_posts('cat=7');
	while (have_posts()) : the_post();

	$categories = get_the_category();
	if($categories){
		foreach($categories as $category) {
			$category_parent = $category->parent;
			if ($category_parent != "0")
			{
				$category_name = $category->cat_name;
			}
		}
	}

	$thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>

        <div class="post-<?=the_ID()?> clearfix list_news">
          <div class="text_block">
	          <h3><a href="<?= the_guid()?>" data-type="blog" data-id="<?= the_ID()?>" data-token="2f67468a67"><?=the_title()?></a></h3>
              
              <div class="title border-color">
                <div class="cate_txt"><?=$category_name?> / <a href="javascript:fb_share('<?=the_title()?>','<?= the_guid()?>','<?=$thumb_url?>');" class="share_link">SHARE</a></div>
    
                <div class="fb-like" data-href="<?= the_guid()?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" style="overflow:hidden; display:none;"></div>
                
                <p class="desc_txt"><?=the_excerpt()?></p>
                <!-- <input type="button" value="공유하기" onclick="javascript:fb_share('<?=the_title()?>','<?= the_guid()?>');"> -->
              </div>
          </div>
		  <!-- <div class="img_block"> -->
		  <div>
            <a href="<?=the_guid()?>" data-type="blog" data-id="<?=the_ID()?>" data-token="2f67468a67">
<?php
	if (has_post_thumbnail())
	{
            //the_post_thumbnail('medium');
            the_post_thumbnail('custom-size');
?>
            <!-- <img src="<?=$thumb_url?>" height="200" alt="<?=the_title()?>" title="<?=the_title()?>" onload="ImgChk(this)"/> -->
<?php
	}else{
?>
            <img src="<?=$home?>/wp-content/themes/Workality-Lite-master/images/no-image.jpg" class="postThumb wp-post-image" alt="<?=the_title()?>" title="<?=the_title()?>" />
<?php
	}
?>
          </a>
          </div>
        </div><!--clearfix-->
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
			caption: 'http://minivertising.kr',
			description: title
		  },
		  function(response) {
			if (response && response.post_id) {
				alert("공유 되었습니다.");
			}
		  }
		);
	}

function ImgChk(obj)
{
FixX=480;
FixY=200;
temp = new Image();
temp.src = obj.src;

if((temp.width-FixX)<(temp.height-FixY))
{
if(temp.height>FixY)
{
obj.height=FixY;
obj.over=1
}
}
else
{
if(temp.width>FixX)
{
obj.width=FixX;
obj.over=1
}
}
obj.style.display = ""
}
</script>
