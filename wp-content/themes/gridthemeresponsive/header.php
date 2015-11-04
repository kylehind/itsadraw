<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head> 
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->  
  <?php wp_head(); ?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.hover_caption.js" type="text/javascript" charset="utf-8"></script>    
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js" type="text/javascript" charset="utf-8"></script>    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51754501-1', 'itsadraw.net');
  ga('send', 'pageview');

</script>


</head>
<body>

<?php $shortname = "grid"; ?>

<style type="text/css">
  body { background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>; }
  .content_divider_inside { background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>; }
</style>

<style type="text/css">
  .hover_caption { background-color: <?php echo get_option($shortname.'_post_hover_background_color',''); ?>; }
</style>

<div id="main_container" <?php post_class($class);?>>
    <?php if(is_page(4)){ ?>
	<div id="header" class="kick_off_header">
    <?php } else { ?>
       <div id="header">
	
           <div class="header_social_icons_cont">
        
               <?php if(get_option($shortname.'_twitter_link','') != "") { ?>
                   <a target="_blank" href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="http://itsadraw.net/wp-content/uploads/2014/06/twitter.png" /></a>
               <?php } ?>                    

               <?php if(get_option($shortname.'_facebook_link','') != "") { ?>
                <a target="_blank" href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="http://itsadraw.net/wp-content/uploads/2014/06/facebook.png" /></a>
               <?php } ?>        
            
               <?php if(get_option($shortname.'_google_plus_link','') != "") { ?>
                  <a target="_blank" href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" /></a>
               <?php } ?>            
            
               <?php if(get_option($shortname.'_dribbble_link','') != "") { ?>
                  <a target="_blank" href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="http://itsadraw.net/wp-content/uploads/2014/06/pinterest.png" /></a>
               <?php } ?>

               <div class="clear"></div>
           </div><!--//header_social_icons_cont-->
	<?php } ?>

        <div class="logo">	
           <a href="http://itsadraw.net/world-cup"></a>
        </div><!-- logo -->

	<?php if(is_page(4)){ ?>
	<?php } else { ?>
           <?php wp_nav_menu('menu-navigation'); ?>                                     
	<?php } ?>
           <div class="clear"></div>
    </div><!--//header-->