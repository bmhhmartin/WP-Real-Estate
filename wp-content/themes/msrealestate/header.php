<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title><?php bloginfo('title')?></title>
    <?php wp_head();?>
</head>


<body <?php body_class();?>>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?php echo get_site_url(); ?>" class="logo">
                        <img src="<?php echo  get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
                    </a>
<!--                    <ul class="nav">-->
<!--                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>-->
<!--                        <li class="scroll-to-section"><a href="#services">Services</a></li>-->
<!--                        <li class="scroll-to-section"><a href="#about">About</a></li>-->
<!--                        <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>-->
<!--                        <li><a href="contact-us.html">Contact Support</a></li>-->
<!--                    </ul>-->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'       => 'header_menu',
                            'container'            => 'section',
                            'menu_id'              => 'primary_header',
                            'menu_class'           => 'nav', //ul class
                            'link_before'          => '',
                            'link_after'           => '',
                            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        )
                    )
                    ?>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->