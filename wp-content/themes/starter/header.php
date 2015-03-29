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
        <div class="top-menu col-lg-12">
          <div class="col-lg-10 center">
            <div class="row">
              <div class="col-sm-6">
                  <nav>
                    <li class="single-entry">
                      <a href="http://themes.laborator.co/aurum/fashion/my-account/">Login</a> or <a href="http://themes.laborator.co/aurum/fashion/my-account/">Register</a>       
                      <span class="sep">|</span> <span>March 26, 2015</span>
                    </li>
                </nav>
              </div>
              <div class="col-sm-6 right-align">
                <nav class="menu-top-links-container">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-739" id="menu-item-739"><a href="http://themes.laborator.co/aurum/fashion/wishlist/">Wishlist</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-315" id="menu-item-315"><a href="http://themes.laborator.co/aurum/fashion/contact/">Stores</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310" id="menu-item-310"><a href="http://themes.laborator.co/aurum/fashion/my-account/">My Account</a></li>
                </nav>      
              </div>
            </div>
          </div>
        </div>
        <div class="menu-nav col-lg-12">
          <div class="col-lg-10 center">
              <div class="logo">
                <a href="#" title="">
                  <img id="site-logo" class="logo-dimensions normal-logo" width="97" height="20" alt="Aurum"src="http://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/logo@2x.png">
                </a>
              </div>
              <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <a href="<?php bloginfo('url'); ?>" class="navbar-brand hidden-lg hidden-md hidden-sm">Mẹ suri shop</a>
                    <button id="navbar-button" type="button" class="navbar-toggle" aria-expanded="false" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" aria-expanded="false">
                  <?php
                      if (has_nav_menu('primary')) {
                          $defaults = array(
                              'theme_location'  => 'primary',
                              'menu'            => '',
                              'container'       => 'div',
                              'container_class' => '',
                              'container_id'    => '',
                              'menu_class'      => 'menu',
                              'menu_id'         => '',
                              'echo'            => true,
                              'fallback_cb'     => 'wp_page_menu',
                              'before'          => '',
                              'after'           => '',
                              'link_before'     => '',
                              'link_after'      => '',
                              'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
                              'depth'           => 0,
                              'walker'          => ''
                          );
                          wp_nav_menu($defaults);
                      }
                  ?>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav> 

              <div class="header-links">
                <ul class="header-widgets">
                  <li>
                    <a class="search-btn" href="#">
                        <svg xml:space="preserve" enable-background="new 0 0 512 512" viewBox="0 0 512 512" height="24px" width="24px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">

                        <path d="M460.355,421.59L353.844,315.078c20.041-27.553,31.885-61.437,31.885-98.037

                          C385.729,124.934,310.793,50,218.686,50C126.58,50,51.645,124.934,51.645,217.041c0,92.106,74.936,167.041,167.041,167.041

                          c34.912,0,67.352-10.773,94.184-29.158L419.945,462L460.355,421.59z M100.631,217.041c0-65.096,52.959-118.056,118.055-118.056

                          c65.098,0,118.057,52.959,118.057,118.056c0,65.096-52.959,118.056-118.057,118.056C153.59,335.097,100.631,282.137,100.631,217.041

                          z" id="search-svg"/>

                        </svg>
                        <span class="sr-only">Search</span>
                      </a>
                  </li>
                  <li>
                      <a href="http://themes.laborator.co/aurum/fashion/cart/" class="cart-counter has-notifications">
                      <span class="badge items-count">1</span>
                      <svg xml:space="preserve" enable-background="new 0 0 512 512" viewBox="0 0 512 512" height="24px" width="24px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                      <path d="M67.851,183.609l-17.682-40h289.744l-12.576,40H67.851z M82.271,218.277l17.461,39.498h205.084  l12.42-39.498H82.271z M389.858,105.109l-59.18,188.166H115.231l17.627,40h227.068l59.178-188.166h29.98l12.746-40H389.858z    M289.925,353.109c-14.852,0-26.891,12.039-26.891,26.891s12.039,26.891,26.891,26.891s26.891-12.039,26.891-26.891   S304.776,353.109,289.925,353.109z M201.042,353.109c-14.852,0-26.891,12.039-26.891,26.891s12.039,26.891,26.891,26.891  s26.891-12.039,26.891-26.891S215.894,353.109,201.042,353.109z" id="cart_1-svg"/>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
          </div>
        </div>











