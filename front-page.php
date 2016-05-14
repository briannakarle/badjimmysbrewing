<?php get_header(); ?>
<!--Begin Middle-->
		<p>front-page.php</p>
        <div id="spotlight">
            <div id="spotlightRelative">
                <img src="../images/bar.jpg" alt="The Bar" id="spotlightMain"/>
                 <div id="spotlightText">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?><!--Start loop-->
            <p><?php the_content(''); // get page or posting written content ?>
            <?php endwhile; endif; // end the loop ?></p>
            </div>          
            </div>
           
            <div class="ctaGroup">
                <div class="cta cta1">
                    <img src="../images/charity1.png" alt="Charity"/>
                        <div class="ctaText">
                            <h2>Charity Event</h2>
                            <p>Come give this charity lots of money and get drunk!</p>
                            <p id="subText">Wednesday May 20, 2015<br>
                            Starts at 5:00pm</p>
                            <a href="#">Read More</a>
                    </div>
                </div>
                <div class="cta cta2">
                    <img src="../images/ontapbandw.png" alt="New Beer on Tap"/>
                        <div class="ctaText">
                            <h2>New Beer on Tap</h2>
                            <p>This beer is new and amazing.  Come drink it.  Here let me tell you all about it.  Beer beer beer beer beer.<br><br></p>
                            <a href="#">Read More</a>
                        </div>
               </div>
               <div class="cta cta3">
                    <img src="../images/soccer.png" alt="Come Watch the Game"/>
                    <div class="ctaText">
                        <h2>Come Watch the Game</h2>
                        <p>We really like the Sounders.  And hockey.  And football.  We watch lots of sports and have an awesome projector.<br><br></p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
            <section id="news">
                <h1>News</h1>
                <?php rewind_posts(); //end first loop?>
                <?php query_posts('showposts=5');  //show latest 5 posts?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); //secondary loop?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="date"><?php the_date(); ?></p>
                    <div class="newsText">
                        <img src="../images/charity1.png" alt="News Article 1"/>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="newsReadMore">
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i>
</a>
                    </div>
                    <div class="clear"></div> 
                </article>
                <?php endwhile; endif; ?>
                <div class="moreNews">
                  <p><a href="../news.php">More News...</a></p>
                </div>
         </section>
        </div>
	<?php get_footer(); ?>
 