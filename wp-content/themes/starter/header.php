<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->
<?php

    global $smof_data; //fetch options stored in $data

    global $wp_query;

    $seo_title = get_post_meta($wp_query->get_queried_object_id(), "_cmb_seo_title", true);

    $seo_description = get_post_meta($wp_query->get_queried_object_id(), "_cmb_seo_description", true);

    $seo_keywords = get_post_meta($wp_query->get_queried_object_id(), "_cmb_seo_keywords", true);

?>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <title><?php if($seo_title!="") { ?><?php bloginfo('name'); ?> | <?php echo $seo_title; ?><?php } else {?><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?><?php } ?></title>

    <meta name="author" content="aether_">

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- For SEO -->

    <?php if($seo_description!="") { ?>

        <meta name="description" content="<?php echo $seo_description; ?>">

    <?php }elseif($smof_data['seo_des']){ ?>

        <meta name="description" content="<?php echo $smof_data['seo_des']; ?>">

    <?php } ?>

    <?php if($seo_keywords!="") { ?>

        <meta name="keywords" content="<?php echo $seo_keywords; ?>">

    <?php }elseif($smof_data['seo_keywords']){ ?>

        <meta name="keywords" content="<?php echo $smof_data['seo_keywords']; ?>">

    <?php } ?>

    <!-- End SEO-->
    <link rel="shortcut icon" href="<?php echo $smof_data['favicon']; ?>">

    <link rel="apple-touch-icon" href="<?php echo $smof_data['app_icon']; ?>">

    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $smof_data['app_icon72']; ?>">

    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $smof_data['app_icon114']; ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid ">
        <div class="content col-lg-9 col-md-10">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php bloginfo('template_url'); ?>/images/shop1.jpg" alt="1">
                </div>
                <div class="item">
                  <img src="<?php bloginfo('template_url'); ?>/images/shop2.jpg" alt="2">
                </div>
                
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
             <h2>HOME SHOP PAGE</h2>
        </div>
    </div>
</body>
</html>










