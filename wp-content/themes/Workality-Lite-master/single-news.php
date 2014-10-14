<?php
  echo ("<meta property='og:title' content='제목'/>") ;
  echo ("<meta property='og:site_name' content='사이트명'/>") ;
  echo ("<meta property='og:description' content='설명문'/>") ;
	include_once("_header.php");

	// 카테고리 명
	//$categories_list = get_the_category_list( __( ', ', 'Workality-Lite-master' ) );

	// 포스트 내용
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
	
	// 클라이언트 명
	$client_array = get_post_meta( $post_array[ID], "client");

	$prev_post = get_previous_post(true);
	$next_post = get_next_post(true);
	
	$prev_post_array = transObject($prev_post);
	$next_post_array = transObject($next_post);
?>
<div id="singlecontent">
  <div class="columns navibg border-color">
    <div class="four columns alpha">
      <h3>NEWS</h3>
    </div>
    <div class="twelve columns omega">
      <div class="navigate">
        <hr class="resshow border-color" /> 
        <span class="pname"></span>
<?
	if (!$next_post)
	{
?>
        <a href="http://minivertising.kr/news/" data-title="news" title="news" data-type="news" class="navigate parent getworks-showmsg gohome" onmouseover="show_title('ALL NEWS')" onmouseout="show_title('')">&nbsp;</a>
<?
	}else{
?>
        <a href="http://minivertising.kr/news/" data-title="news" title="news" data-type="news" class="navigate parent getworks-showmsg gohome" onmouseover="show_title('ALL NEWS')" onmouseout="show_title('')">&nbsp;</a>
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

  <div class="postwraps sixteen columns showajaxcontent border-color news">
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
        <strong>Tags</strong> <br />
        <?=the_tags('', ' ', '');?>
      </div>
      <br class="clear" />
      <hr />
    </div>
    <br class="clear" />
    <div class="fifteensp columns offset-by-half alpha fitvids">
      <div class="postcontent fitvids">
        <div class="contentimages fifteen columns alpha"><?=$post_array[post_content]?></div>
        <br class="clear" />
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<script type="text/javascript">
function show_title(title)
{
	$(".pname").html(title);
}
</script>
<?php
	include_once("_footer.php");
?>