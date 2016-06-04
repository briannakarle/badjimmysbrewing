<aside id="sidebar">


	<!-- Begin Sub-navigation -->
	<div id="sub-navigation">
        <?php my_subnavigation(); ?>
    </div>
    <!-- End Sub-navigation -->
    
    <!-- Begin Profound Quote -->
    <div id="my-quote">
    <?php if (get_post_meta($post->ID, 'quote', true)) : ?>
    
	   <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
       
		
	<?php endif; ?>
	
    </div>
    
    <!-- End Profound Quote -->
    
    
    <!--Begin Dynamic Widgets -->
    <div id="dynamic-widgets">
    	<?php dynamic_sidebar(); ?>
    </div>
    <!-- End Dynamic Widgets -->
            <section class="asideHours">
               <h2>Taproom Hours</h2>
               <p><b>Sunday:</b> 12pm - 12am</p><p><b>Monday - Thursday:</b> 3pm - 12am</p><p><b>Friday & Saturday:</b> 12pm - 2am</p>
            </section>
            <section class="asideSadHour">
                <h2>Sad Hour</h2>
                <p><b>Sunday - Thursday:</b>10pm - 12am</p>
                <p><i class="fa fa-beer"></i>  $3 pints  <i class="fa fa-beer"></i>
</p>
            </section>
            <p id="asideTaproomCta">See what is currently on tap in our <a href="taproom.php">Taproom</a></p>
            <section id="asideNewsletter">
                <p>Want to find out more about what is going on at Bad Jimmy's? <em>Sign up for our newsletter!</em></p>
                <form>
                    <input>
                    <button class="asideNewsletterButton"><i class="fa fa-arrow-circle-right"></i>
</button>
                </form>
            </section>
            <section id="asideSocial">
                <p>Visit us on</p>
                <a href="https://www.facebook.com/pages/Bad-Jimmys-Brewing-Co/200605819975291"><i class="fa fa-facebook-square"></i> Facebook</a>
                <a href="https://twitter.com/BadJimmys"><i class="fa fa-twitter-square"></i> Twitter</a>
                <a href="https://instagram.com/badjimmysbrewingco/"><i class="fa fa-instagram"></i> Instagram</a>
            </section>
        </aside> 
        <div class="clear"></div> 