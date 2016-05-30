<?php get_header(); ?>
<!--Begin Middle-->
        <div class="columnA">
        <h2><?php if (is_category()) {single_cat_title();} else {single_post_title();}?></h2>
        <section id="news">
        <!-- start text -->
        <article id="post-<?php the_ID(); ?>" class="post">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--Start loop-->
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <small class="date">Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small><!--Say what category the post is in-->
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php the_excerpt(''); // get page or posting written content ?>
            <div class="newsReadMore">
                <a href="<?php the_permalink(); ?>">
                Read More
                <i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            <?php endwhile; endif; // end the loop ?>
         </article> 
         <!--end text-->
		<p>index.php</p>
       </section>
       </div>
       <!--sidebar-->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
 