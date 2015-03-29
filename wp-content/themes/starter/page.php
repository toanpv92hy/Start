<?php get_header(); ?>
<div class="col-lg-10 center">
	<?php if (have_posts()){ ?>
        <?php while (have_posts()) : the_post();
          $size = get_post_meta(get_the_ID(), "size", single);
         ?>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-page">
         	<h2><?php the_title(); ?></h2>
         </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-page">
        	<?php the_content(); ?>
        </div>
        <?php endwhile;
      }
    ?>
</div>
<?php get_footer(); ?>