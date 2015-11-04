<?php get_header(); ?>

    <div class="post_content">
	<div id="post_content_inside">
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  
           	 <?php the_content(); ?>
              
        	<?php endwhile; else: ?>
        
            	<h3>Sorry, no posts matched your criteria.</h3>
        
        	<?php endif; ?>    
    
    	</div><!--//content_inside-->
     </div><!--//content-->
        
<?php get_footer(); ?>

<script>
$(".no_posts").remove()

height = $(".gallery-item").width();
console.log(height);
$(".gallery-item").css("height", height);
$(".gallery-icon").css("height", height);
$(".gallery-icon img").css("height", height);

$(".wp-caption-text").css("margin-top", -height);
$(".gallery-icon").append("<a href='#' class='download_button' download><p>for personal use only</p></a>");
$(".gallery-item").mouseover(function(){
	$(".download_button").css("top", "-75px");
});
$(".gallery-item").mouseover(function(){
	   $(this).find(".download_button").css("display","block");
	   $(this).find(".gallery-icon img").css("opacity","0");
	   imageSrc = $(this).find(".gallery-icon img").attr("src");
	   fileName = imageSrc.match("uploads/(.*)-400");
	  filePath = fileName[1] + "_download";
	  downloadPath = filePath + ".pdf";
	  $(this).find(".download_button").attr("href", "http://itsadraw.net/wp-content/uploads/" + downloadPath);
});

$(".gallery-item").mouseout(function(){
	$(this).find(".download_button").css("display","none");
	$(this).find(".gallery-icon img").css("opacity","1");

});
$(".download_button").mouseover(function(){
	$(this).parent().find("img").css("opacity","0");
});

$( window ).resize(function() {
  height = $(".gallery-item").width();
  $(".gallery-icon").css("height", height);
  $(".gallery-icon img").css("height", height);
  $(".gallery-item").css("height", height);
 
  $(".wp-caption-text").css("margin-top", -height);
});

</script>