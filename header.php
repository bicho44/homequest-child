<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php
global $TFUSE;
if(tfuse_options('disable_tfuse_seo_tab'))  wp_title('');
else {  wp_title( '|', true, 'right' );bloginfo( 'name' );
      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) )
          echo " | $site_description";} ?>
    </title>

    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">

    <!-- Tfuse Meta -->
    <?php tfuse_meta(); ?>
    <!-- end tfuse meta -->
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400italic,400,700|Bitter' rel='stylesheet' type='text/css'>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo tfuse_options('feedburner_url', get_bloginfo_rss('rss2_url')); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- tfuse head -->
    <?php tfuse_head();?>
    <!-- end tfuse head -->
    <?php
    wp_head();
    TF_SEEK_HELPER::register_search_parameters(array(
        'form_id'   => 'tfseekfid',
        'page'      => 'tfseekpage',
        'orderby'   => 'tfseekorderby'
    ));
    ?>
    
</head>
<body <?php body_class(); ?>>
    <!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1380595662178099";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->
    <div class="body_wrap">
        <div class="header" <?php //tfuse_header_background(); ?>>
            <div class="header_inner">
                
                <div class="container_12">
                    <div class="header_top">
                        <div class="col col_1_5">
                            <div class="logo">
                                <a href="<?php bloginfo('url'); ?>"><img src="<?php echo tfuse_logo(); ?>" alt="<?php bloginfo('name'); ?>"></a>
                                <strong><?php bloginfo('name'); ?></strong>
                            </div> <!--/ .logo -->
                            <div class="greg">
                                Greg Syrota (Broker)<br>
                                Royal LePage Trinity Realty<br>
                                <a href="mailto:gregsyrota@royallepage.ca"> gregsyrota@royallepage.ca</a>
                            </div>
                            <div class="phonenumber">
                                <img src="<?php echo get_template_directory_uri().'/images/phone_number.png'; ?>" alt="705-446-8082">
                            </div>
                            
                        </div><!-- end col_1_3 -->
                        <div class="col col_1_2">
                            <!-- tfuse Menu -->
                            <?php tfuse_menu('default');  ?>
                            <!-- end tfuse Menu -->
                            <br>
                            <div class="social_media">
                                <a href="https://www.facebook.com/299907873363787" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/images/facebook.png'; ?>" ></a>
                                <a href="https://www.twitter.com/gregsyrota" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/images/twitter.png'; ?>" ></a>
                                <a href="http://ca.linkedin.com/pub/greg-syrota/11/505/848" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/images/linkedin.png'; ?>" ></a>
                                <a href="http://www.pinterest.com/pin/43558321367428230/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/images/pinterest.png'; ?>" ></a>
                                <a href="https://plus.google.com/116728886333830775394" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/images/google.png'; ?>" ></a>
                                <a href="http://www.youtube.com/user/GregSyrota" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/images/youtube.png'; ?>"></a>
                                <a href="https://www.realestateatblue.com/category/blog" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/images/blog.png'; ?>"></a>
                            </div>
                        </div><!-- end col_1_3 -->
                        <div class="col col_1_4">
                            <div class="header_textme">
                                <a href="<?php echo site_url('/text-me/'); ?>" ><img src="http://www.realestateatblue.com/wp-content/themes/homequest-parent/images/text_me.png"> </a>
                            </div><!-- end header_phone -->
                        </div><!-- end col_1_3 -->
                        <div class="clear"></div>
                    </div>
                    <!-- tfuse header content -->
                    <?php tfuse_header_content('header'); ?>
                    <!-- end tfuse header content -->
                    <div class="clear"></div>
                </div>
            </div>
            
        </div>
        <!--/ header -->
        <?php tfuse_header_content('before_content');
        global $is_tf_blog_page;
        if($is_tf_blog_page) tfuse_category_on_blog_page();
        ?>
        