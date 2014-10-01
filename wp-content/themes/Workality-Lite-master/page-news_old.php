<?php
	include_once("_header.php");

// The Query
query_posts("posts_per_page=1&orderby=date&order=DESC");

// The Loop
while ( have_posts() ) : the_post();
endwhile;
$prev_post = get_previous_post();
$next_post = get_next_post();
print_r($prev_post->ID);
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
        <a href="http://workality-lite.northeme.com" data-title="All" title="All Projects" data-type="news" data-token="43f9dba9a5" class="navigate parent getworks-showmsg gohome">&nbsp;</a>
        <!-- <a href="<?php echo get_permalink( $prev_post->ID ); ?>" data-type="news" data-token="43f9dba9a5" data-id="33" title="Impulswerkstatt Newspapers" class="navigate next getworks-nextback getworks-showmsg">&nbsp;</a> -->
        <a href="#" data-type="news" data-token="43f9dba9a5" data-id="33" title="Impulswerkstatt Newspapers" class="navigate next getworks-nextback getworks-showmsg">&nbsp;</a>
      </div>
    </div>
  </div>

  <div class="postwraps sixteen columns showajaxcontent border-color" id="news_div">
    <div class="fifteensp columns offset-by-half alpha">
      <h2 class="titles" style="text-shadow:none!important;"><a href="<?the_guid();?>" style="text-shadow:none!important;"><?the_title();?></a></h2>
      <hr />
    </div>  
    <div class="fifteensp columns offset-by-half alpha pinfo">
      <div class="four columns alpha">
        <strong>Category</strong> <br />
        <a href="http://workality-lite.northeme.com/fields/graphic-design/"><?the_category();?></a>  
      </div> 
      <div class="four columns">
        <strong>Client</strong> <br />
        Client 명
      </div>
      <br class="clear" />
      <hr />
    </div>
    <br class="clear" />
    <div class="fifteensp columns offset-by-half alpha fitvids">
      <div class="twelve columns alpha"><p><?the_excerpt();?></p>
&nbsp;</div>
      <div class="three columns resdontshow omega sharing">
        <!-- <div class="sharingbottom border-color tops">
          <strong>SHARE</strong>
          <br class="clear" />
          <div class="buttons"><div class="facebook shr"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fworkality-lite.northeme.com%2Fworks%2Fsustainability-report%2F&amp;send=false&amp;layout=button_count&amp;width=50&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:21px;" allowTransparency="true"></iframe></div><br class="clear"><div class="twitter shr"><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-url="http://workality-lite.northeme.com/works/sustainability-report/" data-text="Sustainability Report">Tweet</a></div><br class="clear"><div class="googleplus shr"><div class="g-plusone" data-size="medium" data-annotation="none"></div></div><br class="clear"><div class="pinterest shr"><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fworkality-lite.northeme.com%2Fworks%2Fsustainability-report%2F&amp;media=http%3A%2F%2Fworkality-lite.northeme.com%2Fwp-content%2Fuploads%2F2012%2F10%2FJYD19-460x350.jpeg&amp;description=Sustainability+Report" class="pin-it-button"><img style="border:none" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></div><br class="clear"></div></div></div>-->
      </div>
      <br class="clear" />
      <div class="postcontent fitvids">
        <div class="contentimages fifteen columns offset-by-half alpha"><?the_content();?></div>
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
	// Reset Query
	wp_reset_query();

	include_once("_footer.php");
?>