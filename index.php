<?php get_header(); ?>
<!--Begin Middle-->
        <div class="columnA">
        <!-- start text -->
        	<h2><?php if (is_category()) {single_cat_title();} else {single_post_title();}?></h2>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?><!--Start loop-->
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></h3>
            <small>Posted in <?php the_category(); ?></small><!--Say what category the post is in-->
            <?php the_content(''); // get page or posting written content ?>
            <?php endwhile; endif; // end the loop ?>
         <!--end text-->
		<p>index.php</p>
       </div>
       <!--sidebar-->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
 