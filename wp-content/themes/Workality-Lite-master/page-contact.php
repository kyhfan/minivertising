<?php
	include_once("_header.php");
?>
    	
    	<br class="clear" />
        <div class="row fitvids">
        	<div class="sixteen columns">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <div id="gmap_div" style="height:500px;position:relative;left:-460px">
    <iframe id="gmap_iframe" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12663.916420177322!2d126.9908032!3d37.484819449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca1aec441647d%3A0x11a67fdb6ad9321f!2z7ISc7Jq47Yq567OE7IucIOyEnOy0iOq1rCDrsKnrsLDrj5kgOTMxLTk!5e0!3m2!1sko!2skr!4v1411555243887" height="300" frameborder="0"></iframe>
  </div>
<script type="text/javascript">
$(window).resize(function(){
  var b_width = document.body.clientWidth - 20;
  var b_height = document.body.clientHeight;
  var b_left = - (b_width / 4);
  $("#gmap_div").css("width",b_width); 
  $("#gmap_div").css("left",b_left); 
  $("#gmap_iframe").css("width",b_width);
}).resize();  
</script>  
            <?php endwhile; ?>
    		</div>
    	</div>
<?php
	include_once("_footer.php");
?>