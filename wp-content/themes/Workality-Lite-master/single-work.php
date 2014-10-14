<?php
	include_once("_header.php");

	//$categories_list = get_the_category_list( __( ', ', 'Workality-Lite-master' ) );

	$post = $wp_query->post;

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

	// Object형을 Array형으로 변환
	function transObject($data) {
		//array_walk($data, create_function('&$a', 'settype($a, "array"); array_push($a, count($a));'));
		if (gettype($data) != 'array') {
			settype($data, 'array');
		} else {
			array_walk($data, create_function('&$a', 'settype($a, "array");'));
		}
		return $data;
	}
	$post_array = transObject($post);
	//print_r($post_array);

	$client_array = get_post_meta( $post_array[ID], "client");

	$prev_post = get_previous_post(true);
	$next_post = get_next_post(true);
	
	$prev_post_array = transObject($prev_post);
	$next_post_array = transObject($next_post);

?>


<div id="singlecontent">
  <div class="columns navibg border-color" id="navi_div">
    <div class="four columns alpha">
      <h3>WORK</h3>
    </div>
    <div class="twelve columns omega">
      <div class="navigate">
        <hr class="resshow border-color" /> 
        <span class="pname"></span>
<?
	if (!$next_post)
	{
?>
        <a href="http://minivertising.kr/work/" data-title="work" title="work" data-type="work" class="navigate parent getworks-showmsg gohome" onmouseover="show_title('ALL WORK')" onmouseout="show_title('')">&nbsp;</a>
<?
	}else{
?>
        <a href="http://minivertising.kr/work/" data-title="work" title="work" data-type="work" class="navigate parent getworks-showmsg gohome" onmouseover="show_title('ALL WORK')" onmouseout="show_title('')">&nbsp;</a>
        <a href="<?=$next_post_array[guid]?>" data-id="<?=$next_post_array[ID]?>" title="<?=$next_post_array[post_title]?>" class="navigate back getworks-nextback getworks-showmsg" onmouseover="show_title('<?=$next_post_array[post_title]?>')" onmouseout="show_title('')">&nbsp;</a>
<?
	}
	
	if ($prev_post)
	{
?>
        <a href="<?=$prev_post_array[guid]?>" data-id="<?=$prev_post_array[ID]?>" title="<?=$prev_post_array[post_title]?>" class="navigate next getworks-nextback getworks-showmsg" onmouseover="show_title('<?=$prev_post_array[post_title]?>')" onmouseout="show_title('')">&nbsp;</a>
<?
	}
?>
      </div>
    </div>
  </div>
  <div class="postwraps sixteen columns showajaxcontent border-color">
    <div class="fifteensp columns offset-by-half alpha">
      <h2 class="titles" style="text-shadow:none!important;"><?=$post_array[post_title]?></h2>
      <hr />
    </div>  
    <div class="fifteensp columns offset-by-half alpha pinfo">
      <div class="four columns alpha">
        <strong>Category</strong> <br />
        <?=$category_name?>
      </div> 
      <div class="four columns">
        <strong>Client</strong> <br />
        <?=$client_array[0]?>
      </div>      
      <div class="four columns">
        <strong>Tags</strong> <br />
        <?=the_tags('#', ', #', '');?>
      </div>
      <br class="clear" />
      <hr />
    </div>
    <br class="clear" />
    <div class="fifteensp columns offset-by-half alpha fitvids">
      <div class="twelve columns alpha"><p><?=$post_array[post_excerpt]?></p></div>
      <div class="postcontent fitvids">
        <div class="contentimages fifteen columns alpha"><?=$post_array[post_content]?></div>
        <br class="clear" />
      </div>
    </div>
    <br class="clear" />
  </div>
</div> 

<script type="text/javascript">
$(window).resize(function(){
  var b_width = document.body.clientWidth;

	if (b_width < 960){
		$("#video_ifrm").css("height","260px"); 
		$("#video_ifrm").css("width",$("#singlecontent").width()); 
		$("#navi_div").hide(); 
	}
}).resize();

function show_title(title)
{
	$(".pname").html(title);
}

</script>

<?php
	include_once("_footer.php");
?>