<?php
	include_once("_header.php");
	
	// thumbnail 크기 설정
	set_post_thumbnail_size( 220, 166 );
?>
    <div id="post-list" class="row" style="margin-top:0px">

<?php
	query_posts('cat=7');
	//query_posts('cat=4');
	while (have_posts()) : the_post();
		$client_array = get_post_meta( $post->ID, "client");
?>
      <div id="div_post" class="four columns featured project-item" >
        <div class="imgdiv">
          <a href="<?= the_guid()?>" class="getworks" data-type="works" data-id="22" data-token="5b4ac08af1">
            <span></span>
<?php
	if (has_post_thumbnail())
	{
		the_post_thumbnail();
	}else{
?>
            <img src="<?=$home?>/wp-content/themes/Workality-Lite-master/images/no-image.jpg" data-small="<?=$home?>wp-content/themes/Workality-Lite-master/images/no-image.png-150x113.jpg" data-large="<?=$home?>/wp-content/themes/Workality-Lite-master/images/no-image.png-300x226.jpg" title="<?=the_title()?>" alt="<?=the_title()?>" />
<?php
	}
?>
          </a>
        </div>
        <div class="thumb_large">
          <h5><a href="<?= the_guid()?>" class="getworks" data-type="works" data-id="22" data-token="5b4ac08af1"><?=the_title()?></a></h5>
          <p><?=$client_array[0]?></p>
          <p><?=the_excerpt()?></p>
        </div>  
      </div>
<?php
	endwhile;
?>
      <br class="clear rowseperator">
    </div>  
<script type="text/javascript">
$(window).resize(function(){
	var b_width = $("#div_post").width();

	if (b_width == 220)
		<? set_post_thumbnail_size( 220, 166 );?>;
	else
		<? set_post_thumbnail_size( 172, 130 );?>;

}).resize();

</script>

<?php
	include_once("_footer.php");
?>