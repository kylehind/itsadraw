<?php get_header(); ?>

 
    
    <div id="main_content">
    
    <div id="main_content_inside">

    <?php
    $category_ID = get_category_id('blog');

    if (ereg('iPhone',$_SERVER['HTTP_USER_AGENT'])) {
    
        $args = array(
                     'post_type' => 'post',
                     'posts_per_page' => -1,
                     'cat' => '-' . $category_ID,
                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
                     );
    
    } else {
    
        $args = array(
                     'post_type' => 'post',
                     'posts_per_page' => 32,
                     'cat' => '-' . $category_ID,
                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
                     );    
    
    }
    
    query_posts($args);
    $x = 0;
    while (have_posts()) : the_post(); ?>                            
    
     
        <?php if($x == 3) { ?>
	<div class="home_post_cont home_post_cont_last post_box">
        <?php } else { ?>
        <div class="home_post_cont post_box">
        <?php } ?>
	  <div class="image_container">
            <a href="<?php the_permalink(); ?>" data="<?php echo get_the_title(); ?>"><?php the_post_thumbnail('home-post',array('alt' => 'post image'))?>
	      <div <?php post_class(home_post_content); ?>>
	      </div>
	    </a>
	  </div>
        </div><!--//home_post_cont-->
        
        <?php if($x == 3) { $x = -1; echo '<div class="clear"></div>'; } ?>

    <?php $x++; ?>
    <?php endwhile; ?>
    
    <div class="clear"></div>
            
    </div><!--//content_inside-->    
    
    <div class="clear"></div>
    
    </div><!--//content-->                          
<?php get_footer(); ?>    

<script>
//  $(".image_container a").click(function(e) {
//    e.preventDefault()
//  });

  height = $(".home_post_cont").width();
  console.log(height);
  $(".home_post_cont").css("height", height);
  $(".image_container").css("height", height);
  $(".image_container img").css("height", height);
  $(".home_post_cont .home_post_content").css("height", height);
  $(".home_post_cont .home_post_content").css("top", -height);
  $(".image_container a").css("height", height);

  $( window ).resize(function() {
  	height = $(".home_post_cont").width();
	$(".home_post_cont").css("height", height);
 	$(".image_container").css("height", height);
  	$(".image_container img").css("height", height);
  	$(".home_post_cont .home_post_content").css("height", height);
  	$(".home_post_cont .home_post_content").css("top", -height);
  	$(".image_container a").css("height", height);
  });

</script>