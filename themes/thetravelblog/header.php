<!DOCTYPE html>
<html html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>
        <?php $featured = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
        <?php $featured = $featured[0]; ?>
        
    <header class="site-header" style="background-image: url(<?php echo $featured ?>);">
        <nav class="main-navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png">
                        </a>
                    </div><!-- .navbar-header -->
                    <div class="navbar-right">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'container_id' => 'navbar',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_class' => 'nav navbar-nav navbar-right'

                        ));                     
                        ?>
                    </div><!-- .navbar-right -->
                </div><!-- row -->
            </div><!-- .container -->
        </nav><!-- .nav -->

        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="page-title">

                        <?php if(is_front_page()): ?>
                            <?php $description = get_bloginfo('description', 'display'); ?>
                            <h1 class="title"><span><?php echo $description; ?></span></h1>
                        <?php elseif (is_category() ):  ?>
                            <h1 class="title"><span><?php echo single_cat_title(); ?></span></h1>

                        <?php else: ?>
                            <h1 class="title"><span><?php echo the_title(); ?></span></h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
       
