<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('description'); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width"  />
<meta name="robots" content="noindex,nofollow"  />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic|Open+Sans:400,300,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/navstyles.css">
<script src="<?php bloginfo('template_directory'); ?>/scripts/navscript.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<!-- START WP HEAD -->
<?php wp_head(); ?>
<!-- END WP HEAD -->
</head>
<body<?php body_class(); ?>>
    <header>
        <p id="ctaTop">Come visit us for "Sad Hour" Sunday-Thursday: 10pm-12am $3 pints <a href="../taproom.html"><i class="fa fa-angle-double-right"></i></a></p>
        
        <div id="smallHeaderPortion">
            <div id="logo">
                <a href="<?php get_settings('home'); ?>"><img id="mainLogo" src="<?php bloginfo('template_directory'); ?>/images/badjimmyslogo.png" alt="Bad Jimmy's Logo"/></a>
            </div>
            <div class="socialMedia">
                <a href="https://www.facebook.com/pages/Bad-Jimmys-Brewing-Co/200605819975291"><i class="fa fa-facebook-square"></i></a>
                <a href="https://twitter.com/BadJimmys"><i class="fa fa-twitter-square"></i></a>
                <a href="https://instagram.com/badjimmysbrewingco/"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="search">
                <form>
                    <button type="submit"><i class="fa fa-search"></i>
</button>
                    <input type="search">
                </form>
            </div>
        </div>
    </header>
    <nav>
    <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'cssmenu')); ?>
    
     <!--  <div id="cssmenu">
            <ul>
                <li><a href="about.php">About</a>
                    <ul>
                        <li><a href="staff.php">Staff</a></li>
                        <li><a href="press.php">Press</a></li>
                    </ul>
                </li>
                <li><a href="beer.php">Beer</a>
                    <ul>
                        <li><a href="yearround.php">Year Round</a></li>
                        <li><a href="seasonal.php">Seasonal</a></li>
                        <li><a href="limitedrelease.php">Limited Release</a></li>
                        <li><a href="findourbeer.php">Find our Beer</a></li>
                        <li><a href="beer101.php">Beer 101</a></li>
                    </ul>
                </li>
                <li><a href="taproom.php">Taproom</a>
                    <ul>
                        <li><a href="ontap.php">On Tap</a></li>
                    </ul>
                </li>
                <li><a href="events.php">Events</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="contact.php">Contact</a>
                    <ul>
                        <li><a href="vendors.php">Vendors</a></li>
                    </ul>
                </li>
            </ul>
         </div> -->
    </nav>    
    <div id="middle">