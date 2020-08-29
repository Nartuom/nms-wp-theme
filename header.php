<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
    <nav>
        <a id="brand-name" href="/">SIMON PHELPS</a>
        <a id="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div id="links-container">
            <ul>
                <li class="navbar-links"><a href="<?php echo site_url()?>">HOME</a></li>
                <li class="navbar-links"><a href="<?php echo site_url('/about')?>">ABOUT</a></li>
                <li class="navbar-links"><a href="<?php echo site_url('/blog')?>">BLOG</a></li>
                <li class="navbar-links"><a href="<?php echo site_url('/contact')?>">CONTACT</a></li>
                <li class="navbar-links"><a><img id="fbIcon" src="<?php echo get_theme_file_uri('/images/f_logo_RGB-White_58.png')?>"></a></li>
            </ul>
        </div>
    </nav>

