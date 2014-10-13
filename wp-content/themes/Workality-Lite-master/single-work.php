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
?>


<div id="singlecontent">
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
        <?=the_tags('', ' ', '');?>
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


<?php
	include_once("_footer.php");
?>