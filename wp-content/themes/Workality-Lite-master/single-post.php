<?php
	include_once("_header.php");

	$post = $wp_query->post;

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
?>
<div id="singlecontent">
  <div class="postwraps sixteen columns showajaxcontent">
    <div class="fifteensp columns offset-by-half alpha">
      <h2 class="titles" style="text-shadow:none!important;"><?=$post_array[post_title]?></h2>
      <hr />
    </div>  
    <div class="fifteensp columns offset-by-half alpha pinfo">
      <div class="work_post_block clearfix">
          <div class="left">
              <p>
                <span>Category</span> <span><a href="#">category 명</a></span>
              </p> 
              <p>
                <span>Client</span> <span><?=$post_array[post_excerpt]?></span>
              </p>
          </div>
          <div class="right">
          	<p><?=$post_array[post_excerpt]?></p>
          </div>
      </div>
    </div>
    <br class="clear" />
    <div class="fifteensp columns offset-by-half alpha fitvids">
      <div class="three columns resdontshow omega sharing">
        <!-- <div class="sharingbottom border-color tops">
          <strong>SHARE</strong>
          <br class="clear" />
          <div class="buttons"><div class="facebook shr"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fworkality-lite.northeme.com%2Fworks%2Fsustainability-report%2F&amp;send=false&amp;layout=button_count&amp;width=50&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:21px;" allowTransparency="true"></iframe></div><br class="clear"><div class="twitter shr"><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-url="http://workality-lite.northeme.com/works/sustainability-report/" data-text="Sustainability Report">Tweet</a></div><br class="clear"><div class="googleplus shr"><div class="g-plusone" data-size="medium" data-annotation="none"></div></div><br class="clear"><div class="pinterest shr"><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fworkality-lite.northeme.com%2Fworks%2Fsustainability-report%2F&amp;media=http%3A%2F%2Fworkality-lite.northeme.com%2Fwp-content%2Fuploads%2F2012%2F10%2FJYD19-460x350.jpeg&amp;description=Sustainability+Report" class="pin-it-button"><img style="border:none" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></div><br class="clear"></div></div></div>-->
      </div>
      <br class="clear" />
      <div class="postcontent fitvids">
        <div class="contentimages fifteen columns alpha"><?=$post_array[post_content]?></div>
        <br class="clear" />
      </div>
      <!-- <div class="fifteensp columns offset-by-half alpha" style="margin-bottom:10px;">
        <div class="sharingbottom border-color bottoms"> 
        <div class="resdontshow shr"><strong>SHARE : </strong></div>
        <div class="facebook shr"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fworkality-lite.northeme.com%2Fworks%2Fsustainability-report%2F&amp;send=false&amp;layout=button_count&amp;width=50&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:21px;" allowTransparency="true"></iframe></div><div class="twitter shr"><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-url="http://workality-lite.northeme.com/works/sustainability-report/" data-text="Sustainability Report">Tweet</a></div><div class="googleplus shr"><div class="g-plusone" data-size="medium" data-annotation="none"></div></div><div class="pinterest shr"><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fworkality-lite.northeme.com%2Fworks%2Fsustainability-report%2F&amp;media=http%3A%2F%2Fworkality-lite.northeme.com%2Fwp-content%2Fuploads%2F2012%2F10%2FJYD19-460x350.jpeg&amp;description=Sustainability+Report" class="pin-it-button"><img style="border:none" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></div>					                    &nbsp;
      </div> -->
      <!-- <hr class="resshow border-color-works" /> 
      <div class="navigate pull-right">
        <span class="pname"></span> 
        <a href="http://workality-lite.northeme.com" data-title="All" title="All Projects" data-type="works" data-token="35ff6bbe10" class="navigate parent getworks-showmsg gohome">&nbsp;</a>
        <a href="http://workality-lite.northeme.com/works/impulswerkstatt-newspapers/" data-type="works" data-token="35ff6bbe10" data-id="33" title="Impulswerkstatt Newspapers" class="navigate next getworks-nextback getworks-showmsg">&nbsp;</a>
      </div> -->
    </div>
    <br class="clear" />
    <br class="clear" />
  </div>
</div> 
<?php
	include_once("_footer.php");
?>