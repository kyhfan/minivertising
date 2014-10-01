<?php
	include_once("_header.php");
?>
    <div id="post-list" class="row" style="margin-top:0px">

<?php
	$query = "SELECT * FROM wp_posts WHERE post_type='post' AND post_status <> 'auto-draft' ORDER BY ID DESC";
	$res = mysqli_query($my_db, $query);
		while($data = mysqli_fetch_array($res))
		{
			$thumb_flag = 0;
			$query_options = "SELECT option_value FROM wp_options WHERE option_name='home'";
			list($home) = mysqli_fetch_array(mysqli_query($my_db, $query_options));
			$date_array1 = explode(" ",$data[post_date]);
			$date_array2 = explode("-",$date_array1[0]);

			$query_meta = "SELECT * FROM wp_posts WHERE post_parent='".$data[ID]."' AND post_type='attachment' ORDER BY ID DESC limit 1";
			$res_meta = mysqli_query($my_db, $query_meta);
			while($meta_data = mysqli_fetch_array($res_meta))
			{
				$thumb_flag = 1;
				$query_meta_re = "SELECT meta_value FROM wp_postmeta WHERE post_id='".$meta_data[ID]."' AND meta_key='_wp_attached_file'";
				list($thumb_img) = mysqli_fetch_array(mysqli_query($my_db, $query_meta_re));
			}
?>
      <div class="four columns featured project-item" >
        <div class="imgdiv">
          <a href="<?=$data[guid]?>" class="getworks" data-type="works" data-id="22" data-token="5b4ac08af1">
            <span></span>
<?php
	if ($thumb_flag == 1)
	{
		$thumb_array = explode(".",$thumb_img);
?>
            <img src="<?=$home?>/wp-content/uploads/<?=$thumb_array[0]?>.<?=$thumb_array[1]?>" data-small="<?=$home?>/wp-content/uploads/<?=$thumb_array[0]?>-150x113.<?=$thumb_array[1]?>" data-large="<?=$home?>/wp-content/uploads/<?=$thumb_array[0]?>-300x226.<?=$thumb_array[1]?>" title="<?=$data[post_title]?>" alt="<?=$data[post_title]?>" />
<?php
	}else{
?>
            <img src="<?=$home?>/wp-content/themes/Workality-Lite-master/images/no-image.jpg" data-small="<?=$home?>wp-content/themes/Workality-Lite-master/images/no-image.png-150x113.jpg" data-large="<?=$home?>/wp-content/themes/Workality-Lite-master/images/no-image.png-300x226.jpg" title="<?=$data[post_title]?>" alt="<?=$data[post_title]?>" />
<?php
	}
?>
          </a>
        </div>
        <div class="thumb_large">
          <h5><a href="<?=$data[guid]?>" class="getworks" data-type="works" data-id="22" data-token="5b4ac08af1"><?=$data[post_title]?></a></h5>
          <p><?=$data[post_excerpt]?></p>
        </div>  
      </div>
<?php
		}
?>
      <br class="clear rowseperator">
    </div>  
<?php
	include_once("_footer.php");
?>