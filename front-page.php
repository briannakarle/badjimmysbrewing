<?php get_header(); ?>
<!--Begin Middle-->
        <div class="columnA">
        <!-- start text -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?><!--Start loop-->
            <h2><?php the_title();?></a></h2> <!--Make an h2 which is a link to the page with the title-->
            <?php the_content(''); // get page or posting written content ?>
            <?php endwhile; endif; // end the loop ?>
         <!--end text-->
		<p>front-page.php</p>
       </div>
	<?php get_footer(); ?>
 