<?php get_header(); ?>
<?php if(is_page(4)){ ?>
	<a href="http://itsadraw.net/world_cup"><img src="http://itsadraw.net/wp-content/uploads/typo_logo.png" alt="typo_logo" class="typo_logo alignnone size-full wp-image-354" /></a> 
<?php } ?>
<?php if(is_page(17)){ ?>
<div id="post_content">
  <div id="post_content_inside">
<?php } else { ?>
<div id="content">
  <div id="content_inside">
<?php } ?>

    <div <?php post_class($class);?>>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  
            <?php the_content(); ?>
                        
            <?php //comments_template(); ?>
        
        <?php endwhile; else: ?>
        
            <h3>Sorry, no posts matched your criteria.</h3>
        
        <?php endif; ?>    
    
        <div class="clear"></div>                    
    </div>
  </div>
<?php if(is_page(4)){ ?>
  <div class="kick_off_button">
	<a class="kick_off" href="http://itsadraw.net/world-cup/">Kick Off</a>     
  </div> 
  <div class="affiliates">
	<img class="chase" src="http://itsadraw.net/wp-content/uploads/chase_logo-300x50.png"><img class="uclan" src="http://itsadraw.net/wp-content/uploads/UCLAN-LOGO.png">
  </div>
<?php } ?>
</div>   
<?php get_footer(); ?>    

<script>
var wrapper = $('<div/>').css({'height':'0', 'width':'0','overflow':'hidden'});
var fileInput = $(':file').wrap(wrapper);
$('#file').append("<p class='file_name'><p class='requirements'></p><p>");
$('.file_name').text("ADD IMAGE *");
$('.requirements').text("Max 5MB. JPG, JPEG, or, PNG");
fileInput.change(function(){
    $this = $(this);
    var filePath = $this.val();
    var fileName = filePath.replace("fakepath", "");
    console.log(fileName);
    $('.file_name').text(fileName);
    $('.requirements').text("");
})

$('#file').click(function(){
    fileInput.click();
}).show();


</script>

<script type="text/javascript">


  fontSize = window.innerHeight /29;
  $(".post-4 p").css("font-size", fontSize);

  contentHeight = $(".inner_content").height();
  console.log(contentHeight);
  $("#content_inside").css("height", contentHeight);
  marginTop = contentHeight /2;
  $("#content_inside").css("margin-top", -marginTop);



  if (screen.width <= 455) {
	 document.location = "http://itsadraw.net/world-cup";
  };

  $( window ).resize(function() {
  	height = $(".home_post_cont").width();
	

	fontSize = window.innerHeight /29;
  	$(".post-4 p").css("font-size", fontSize);

 	contentHeight = $(".kick_off_text").height();
  	console.log(contentHeight);
  	$("#content_inside").css("height", contentHeight);
  	marginTop = contentHeight /2;
  	$("#content_inside").css("margin-top", -marginTop);
  });
</script>