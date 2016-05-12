<?php get_header(); ?>
<!--Begin Middle-->
        <div class="columnA">
        <!-- start text -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?><!--Start loop-->
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2> <!--Make an h2 which is a link to the page with the title-->
            <small>Posted in <?php the_category(); ?></small><!--Say what category the post is in-->
            <?php the_content(''); // get page or posting written content ?>
            <?php endwhile; endif; // end the loop ?>
         <!--end text-->
		<p>index.php</p>
       </div>
       <!--sidebar-->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
 