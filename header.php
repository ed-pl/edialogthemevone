<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<!-- Navigahtion -->
<header>
	
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div class="container">
        <!--Logo einbauen -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php 
                    if (function_exists('the_custom_logo')) {
                    the_custom_logo();    
                    } ?>
            </a>

	  	  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
       
    
        <!-- Einbinden der wp_nav_menu_walker -->
        
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 3,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
</header>
	
	
	